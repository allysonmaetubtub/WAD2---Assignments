<?php

use Illuminate\Support\Facades\Input;

Route::get('/', function() {
	return redirect()->route('students');
});

Route::get('/registration-form', "StudentController@getRegistrationForm");
Route::post('/registration-form', "StudentController@postRegistrationForm");

Route::get('/students', "StudentController@getStudents")->name('students');

Route::get('/students/{id}', 'StudentController@getStudent');
Route::get('/students/{id}/edit', 'StudentController@editStudent');
Route::post('/students/{id}', 'StudentController@updateStudent');
//added:
Route::delete('students/{id}', 'StudentController@deleteStudent')->name('deleteStudent');

Auth::routes();
//for log in

//Route::get('edit-student','studentUpdateController@index');
//Route::get('edit/{id}','studentUpdateController@show');
//Route::post('edit/{id}','studentUpdateController@edit');

//Route::get('students', "StudentController@editStudents");

//Route::put('students', "StudentController@updateStudents");

Route::get('/student-form', "StudentFormController@getStudentForm");
Route::post('student-form', "StudentFormController@postStudentForm");