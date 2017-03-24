<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	use SoftDeletes;

    //protected $table="students_table";
    //protected $table="students";
    protected $fillable=['student_ID','name', 'course', 'address', 'contact_person', 'contact_num'];
    						// ^ database fields 
    // access modifier is "protected"
    //add "fillable" array
    //for MassAssignmentException
    protected $dates = ['deleted_at'];
}
