<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupancy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description'
    ];
}
