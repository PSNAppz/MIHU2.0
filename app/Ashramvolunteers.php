<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ashramvolunteers extends Model
{
    protected $fillable = ['section', 'seva_place', 'incharge', 'contact'];
}
