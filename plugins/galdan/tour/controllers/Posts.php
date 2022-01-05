<?php namespace Galdan\Tour\Controllers;

use Flash;
use DB;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use ApplicationException;
use Galdan\Tour\Models\Post;
use Galdan\Tour\Models\Day;

class Posts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Galdan.Tour.Behaviors.MyListController',
        'Backend.Behaviors.ImportExportController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
    public $importExportConfig = 'config_import_export.yaml';


    public $requiredPermissions = ['galdan.tour.access_other_posts', 'galdan.tour.access_posts'];

    protected $fillable = ['title', 'slug', 'intro', 'description', 'description_html', 'start', 'end', 'grade', 'includes', 'excludes', 'deleted'];

public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Galdan.Tour', 'tour', 'posts');

        // $this->addCss('/plugins/galdan/tour/assets/css/help.css'); // Help assets already loaded in default backend layout
        // $this->addJs('/plugins/galdan/tour/assets/js/help.js');
    }

    public function index()
    {
        $this->vars['postsTotal'] = Post::count();
        $this->vars['postsPublished'] = Post::isPublished()->count();
        $this->vars['postsDrafts'] = $this->vars['postsTotal'] - $this->vars['postsPublished'];

        $this->asExtension('MyListController')->index();
    }

    

    public function create()
    {
        BackendMenu::setContextSideMenu('new_post');

        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/galdan/tour/assets/css/rainlab.tour-preview.css');
        $this->addJs('/plugins/galdan/tour/assets/js/post-form.js');

        return $this->asExtension('FormController')->create();
    }

    public function update($recordId = null)
    {   
        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/galdan/tour/assets/css/rainlab.tour-preview.css');
        $this->addJs('/plugins/galdan/tour/assets/js/post-form.js');

        return $this->asExtension('FormController')->update($recordId);
    }

    public function listExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['galdan.tour.access_other_posts'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function formExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['galdan.tour.access_other_posts'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function formExtendFieldsBefore($widget)
    {
        if (!$model = $widget->model) {
            return;
        }

        if ($model instanceof Post && $model->isClassExtendedWith('Galdan.Translate.Behaviors.TranslatableModel')) {
            $widget->secondaryTabs['fields']['content']['type'] = 'Galdan\Tour\FormWidgets\MLTourMarkdown';
        }
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if ((!$post = Post::find($postId)) || !$post->canEdit($this->user)) {
                    continue;
                }

                $post->delete();
            }

            Flash::success('Successfully deleted those posts.');
        }

        return $this->listRefresh();
    }

    /**
     * {@inheritDoc}
     */
    public function listInjectRowClass($record, $definition = null)
    {
        if (!$record->published) {
            return 'safe disabled';
        }
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }

    public function onRefreshPreview()
    {
        $data = post('Post');

        $previewHtml = Post::formatHtml($data['content'], true);

        return [
            'preview' => $previewHtml
        ];
    }

    public function gantt() {
        if(post('start')) {
            $this->vars['tours'] = Post::where('start', '>', post('start'))->where('end', '<', post('end'))->get();
        } else {
            $this->vars['tours'] = Post::all();
        }
        
    }
  

    //update tour end date
    public function formAfterSave($model)
    {
        $tour_id = $model->id;
        $tour = Post::where('id', $tour_id)->get();
        
        $days = count(Day::where('itinerary_id', $tour[0]['itinerary_id'])->lists('day'));
        $end = date('Y-m-d H:i:s', strtotime('+'.$days.' days', strtotime($tour[0]['start'])));
        Db::table('galdan_tour_posts')->where('id', $tour_id)->update(['end' => $end]);
        return true;
    }

    public function index_onView()
    {
        // return \Backend::redirect();
    }
    
}
