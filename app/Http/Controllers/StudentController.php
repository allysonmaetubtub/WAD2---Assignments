<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller{

	public function getRegistrationForm(Request $request){
		return view("registration-form");
		//$student=Student::find(1);
	}

	public function postRegistrationForm(Request $request){

		//$students = showStudent::table(Student)->get();

		//change ^ to a new page showing the database (new php file?)
		$this->validate($request,[
			'studentId' => 'required|integer',
			'name' => 'required|string',
			'course'=> 'required|alpha_num'

			]);

		$students=Student::all();
		$student = new Student;
		$student->student_ID = Input::get('studentId');
		$student->name = Input::get('name');
		$student->course = Input::get('course');
		$student->address = Input::get('address');
		$student->contact_person = Input::get('contactPerson');
		$student->contact_num = Input::get('contactNumber');
		$student->save();

		//return view("showStudent");
		return redirect("students");
	}

	public function getStudents(){
		$students=Student::all();

		return view("showStudenttable",compact("students"));
	}

	public function getStudent($id){
		return view('showstudent', ['student'=>Student::findOrFail($id)]);
		//return view('showStudent', ['student'=>Student::findOrFail($id)]);
	}

	public function editStudent($id){
		$student=Student::findOrFail($id);
		return view("edit-student", compact("student"));
		//return view('students.edit-student')->withStudent($student);
		//fetch student data by id
		//the return view with student data
	}

	public function updateStudent(Request $request, $id){
		$student = Student::findOrFail($id);
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->address = $request->input('address');
        $student->contact_person = $request->input('contactPerson');
        $student->contact_num = $request->input('contactNumber');
        $student->save();

        return redirect()->action('StudentController@getStudent', ['id' => $id]);
//		return view("update-student", compact("students"));
		//store db from student edit form
	}

	 public function deleteStudent($id) {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->action('StudentController@getStudents');
    }
}
?>