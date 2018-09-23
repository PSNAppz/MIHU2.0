<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darshan extends Model
{
    protected $fillable = ['date', 'darshan_time', 'token_loc'];
}
