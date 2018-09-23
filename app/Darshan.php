<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darshan extends Model
{
    protected $fillable = ['darshan_time','date','token_loc', 'token_time'];
}
