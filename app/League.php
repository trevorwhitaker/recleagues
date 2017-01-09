<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'leaguename', 'city', 'province', 'sport', 'email', 'website', 'person', 'phone', 'description'
    ];
}
