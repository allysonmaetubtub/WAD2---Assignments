<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentFormController extends Controller
{
    public function getStudentForm(Request $Request){
    	return view('student-form');
    }

    public function postStudentForm(Request $Request){
    	return "";
    }
}
