<?php namespace Galdan\Tour\Controllers;

use DB;
use Request;
use BackendAuth;
use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use Galdan\Tour\Models\Post;
use Galdan\Tour\Models\Day;
use Galdan\Clients\Models\Client;
use Galdan\Tour\Models\Itinerary;
use Galdan\Email\Classes\ItinerarySender;
/**
 * Itineraries Back-end Controller
 */
class Itineraries extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Galdan.Tour.Behaviors.MyListController',
        'Backend.Behaviors.ImportExportController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $end;
    protected $fillable = ['title', 'slug', 'intro', 'description', 'description_html', 'start', 'end', 'grade', 'includes', 'excludes', 'deleted', 'seen'];
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Galdan.Tour', 'tour', 'itineraries');

        $this->addJs('/plugins/galdan/tour/assets/js/itinerary.js');
    }

    public function update($recordId = null)
    {   
        // $itinerary_id = $recordId;
        // $tours = Post::where('itinerary_id', $itinerary_id)->get();

        // foreach ($tours as $tour) {
        //     // dd($tour);
        //     $days = count(Day::where('itinerary_id', $itinerary_id)->lists('day'));
        //     $string = '+'.$days.' days';
        //     $end = date('Y-m-d H:i:s', strtotime($string, strtotime($tour['start'])));
        //     Db::table('galdan_tour_posts')->where('id', $tour['id'])->update(['end' => $end]);
        //     // dd($tour['start'], $days, $end);
        // }

        return $this->asExtension('FormController')->update($recordId);
    }

    // public function index_onDelete()
    // {
    //     $itinerary->delete();
    //     Flash::success('Successfully deleted those posts.');

    //     return $this->listRefresh();
    // }

    public function onDelete($recordId = null)
    {   
        //TODO: get id to delete
        // dd($recordId);
        Db::table('galdan_tour_itineraries')->where('id', 8)->delete();
        Flash::success('Successfully deleted the itinerary.');

        return $this->listRefresh();

    }


    public function onUpdate($recordId = null)
    {   
         // Db::table('galdan_tour_posts')->where('id', $recordId)->update([
         //        'end' => '2017-07-28'
         //    ]);

    }

    public function beforeSave($recordId = null)
    {
        $itinerary_id = $recordId;
        $tours = Post::where('itinerary_id', $itinerary_id)->get();
        foreach ($tours as $tour) {
            $days = count(Day::where('itinerary_id', $itinerary_id)->lists('day'));
            $end = date('Y-m-d H:i:s', strtotime('+'.$days.' days', strtotime($tour['start'])));
            Db::table('galdan_tour_posts')->where('id', $tour['id'])->update(['end' => $end]);
        }
        return true;
    }


    //show form and all clients
    public function onEmail() {
        $this->vars['clients'] = Client::all();
    }

    public function onEmailSend() {
        $client = Client::find(input('client'));
        $itinerary = Itinerary::whereId(trim(post('itinerary_id')))->first();
        $sender = new ItinerarySender($itinerary);
        $sender->sendItinerary($client);

        \Flash::success('Itinerary sent client '.$client['name']);
    }

    public function index_onView()
    {
        
    }


}
