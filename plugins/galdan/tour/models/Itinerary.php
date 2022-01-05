<?php namespace Galdan\Tour\Models;

use Model;
use DB;
use Galdan\Tour\Models\Post;
use Galdan\Tour\Models\Day;

/**
 * Itinerary Model
 */
class Itinerary extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'galdan_tour_itineraries';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasMany = [
        'posts' => ['Galdan\Tour\Models\Post'],
        'days' => ['\Galdan\Tour\Models\Day']
    ];



    public $hasOne = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];


    public function beforeSave($recordId = null)
    {
        //TODO: remove constant itinerary
        $itinerary_id = 2;
        $tours = Post::where('itinerary_id', $itinerary_id)->get();
        foreach ($tours as $tour) {
            $days = count(Day::where('itinerary_id', $itinerary_id)->lists('day'));
            $string = '+'.$days.' days';
            $end = date('Y-m-d H:i:s', strtotime($string, strtotime($tour['start'])));
            Db::table('galdan_tour_posts')->where('id', $tour['id'])->update(['end' => $end]);
        }
        return true;
    }

    
}
