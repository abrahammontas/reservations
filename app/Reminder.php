<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reservation_id', 'description', 'user_id', 'priority'
    ];

    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function priority()
    {
        return $this->belongsTo('App\Priority');
    }
}
