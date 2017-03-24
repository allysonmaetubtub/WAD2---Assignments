<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentTable extends Model
{
    use SoftDeletes;

    protected $table="students";
    protected $fillable=['student_ID','name', 'course', 'address', 'contact_person', 'contact_num'];
    // ^ database fields 

    protected $dates = ['deleted_at'];
}
