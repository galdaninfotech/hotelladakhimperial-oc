<?php namespace Galdan\Testimonials\Models;

use Model;

class Testimonials extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $table = 'galdan_testimonials_testimonials';

    public $rules = [
        'name'  => 'required',
        'country' => 'required',
        'message' => 'required'
    ];

    public function beforeCreate()
    {
        $this->created = 1;
        $this->statistics = 0;
    }

    public function beforeUpdate()
    {
        unset($this->created, $this->statistics);
    }

    public function isActive()
    {
        return $this->status == 1;
    }

    public function isUnsubscribed()
    {
        return $this->status == 2;
    }

    public function activate()
    {
        $this->status = 1;
        $this->save();
    }

    public function unsubscribe()
    {
        $this->status = 2;
        $this->save();
    }

    public function scopeEmail($query, $email)
    {
        return $query->where('email', $email);
    }

    public function scopeIsSubscribed($query)
    {
        return $query->where('status', 1);
    }

    public function scopeIsUnsubscribed($query)
    {
        return $query->where('status', 2);
    }
}
