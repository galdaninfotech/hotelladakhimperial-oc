<?php namespace Galdan\Testimonials\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;

class Testimonials extends ReportWidgetBase
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
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'galdan.testimonials::lang.menu.testimonials',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'total' => [
                'title'             => 'galdan.testimonials::lang.widgets.show_total',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['total'] = \Galdan\Testimonials\Models\Testimonials::count();
    }
}
