<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SalarySheet extends Model
{

    use Notifiable;

    public $timestamps = true;

    protected $fillable = [ 
    	'emp_id',
    	'joining_date',
    	'salary',
    	'house_rent',
    	'medical_fee',
    	'conveyance',
    	'month',
    	'year',
    ];

    public function employee() {
        return $this->belongsTo(Employee::class, 'emp_id', 'id');
    }
}
