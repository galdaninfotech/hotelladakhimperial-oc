<?php namespace Indikator\News\Models;

use Backend\Models\ExportModel;

class SubscribersExport extends ExportModel
{
    public $table = 'news_subscribers';

    public function exportData($columns, $sessionKey = null)
    {
        return self::make()->get()->toArray();
    }
}
