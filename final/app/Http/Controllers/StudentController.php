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
		//{

		//$students = showstudenttable::table(StudentTable)->get();
		//} 
		//change ^ to a new page showing the database (new php file?)
		$students=StudentTable::all();
		$student = new StudentTable;
		$student->student_ID = Input::get('studentId');
		$student->name = Input::get('name');
		$student->course = Input::get('course');
		$student->address = Input::get('address');
		$student->contact_person = Input::get('contactPerson');
		$student->contact_num = Input::get('contactNumber');
		$student->save();

		//return view("showstudenttable");
		return redirect("students");
	}

	public function getStudents(){
		$students=StudentTable::all();

		return view("showstudenttable", compact("students"));
	}

	public function getStudent($id){
		return view('showstudent', ['student'=>StudentTable::findOrFail($id)]);
	}


	public function editStudent($id){
        $student = StudentTable::findOrFail($id);
        return view("edit-student", compact("student"));
        
	}

	public function updateStudent(Request $request, $id){

        $student = StudentTable::findOrFail($id);
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->address = $request->input('address');
        $student->contact_person = $request->input('contactPerson');
        $student->contact_num = $request->input('contactNumber');
        $student->save();

        return redirect()->action('StudentController@getStudent', ['id' => $id]);
	}

    public function deleteStudent($id) {
        $student = StudentTable::findOrFail($id);
        $student->delete();

        return redirect()->action('StudentController@getStudent', ['id' => $id]);
    }
}
?>
