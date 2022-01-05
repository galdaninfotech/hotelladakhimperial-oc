<?php namespace Galdan\Tour\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;

class Posts extends ReportWidgetBase
{
    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'Tours',
                'default'           => 'Tours',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'total' => [
                'title'             => 'Total',
                'default'           => true,
                'type'              => 'checkbox'
            ],
        ];
    }

    protected function loadData()
    {
        $this->vars['tours']   = \Galdan\Tour\Models\Post::all();
    }
}
