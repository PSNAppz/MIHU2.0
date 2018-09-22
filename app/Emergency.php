<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $fillable = ['id', 'name', 'contactNum', 'category', 'place', 'available'];
}
