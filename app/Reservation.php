<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address1', 'address2', 'address3','contactPhone', 'contactFax', 'contactEmail',
        'contactSalesManager', 'arrivalDate', 'departureDate', 'adults', 'contactName', 'status'
    ];

    public function priority()
    {
        return $this->belongsTo('App\Priority');
    }

    public function reminders()
    {
        return $this->hasMany('App\Reminders');
    }

    public function status()
    {
        return $this->belongsTo('App\status');
    }
}
