<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['series', 'title', 'description', 'thumb', 'price', 'sale_date', 'type'];
}
