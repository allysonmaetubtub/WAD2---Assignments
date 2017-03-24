<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\StudentTable;

class StudentController extends Controller{

	public function getRegistrationForm(Request $request){
		return view("registration-form");
		//$student=StudentTable::find(1);
	}

	public function postRegistrationForm(Request $request){
		return "Congratz!";
		$student = new StudentTable;
		$student->student_ID = Input::get('studentId');
		$student->name = Input::get('name');
		$student->course = Input::get('course');
		$student->address = Input::get('address');
		$student->contact_person = Input::get('contactPerson');
		$student->contact_num = Input::get('contactNumber');
		$student->save();
	}
}

?>