<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_jobOpp extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_oppertunity_id',
        'employee_id',
        'status'
    ];
    
    // public function employees()
    // {
    //     return $this->belongsToMany(Employee::class);
    // }

    // public function JobOppertunity()
    // {
    //     return $this->belongsToMany(job_opp::class);
    // }
}
