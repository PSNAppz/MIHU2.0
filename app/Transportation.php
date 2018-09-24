<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
	protected $fillable = ['mode', 'busno', 'contact', 'from', 'destination', 'deptime', 'parking'];
}
