<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{

	use Notifiable, Selectable;

    public $timestamps = true;

    protected $fillable = [ 
    	'name',
    	'salary',
    	'joining_date',
    	];
}
