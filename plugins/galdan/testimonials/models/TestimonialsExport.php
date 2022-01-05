<?php namespace Galdan\Testimonials\Models;

use Backend\Models\ExportModel;

class TestimonialsExport extends ExportModel
{
    public $table = 'galdan_testimonials_testimonials';

    public function exportData($columns, $sessionKey = null)
    {
        return self::make()->get()->toArray();
    }
}
