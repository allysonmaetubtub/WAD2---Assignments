<?php

use Illuminate\Support\Facades\Input;

Route::get('registration-form', "StudentController@getRegistrationForm");
Route::post('registration-form', "StudentController@postRegistrationForm");

Route::get('students', "StudentController@getStudents");

Route::get('students/{id}', 'StudentController@getStudent');
Route::get('students/{id}/edit', 'StudentController@editStudent');
Route::post('students/{id}', 'StudentController@updateStudent');
Route::delete('students/{id}', 'StudentController@deleteStudent');

//Route::get('students', "StudentController@editStudents");

//Route::put('students', "StudentController@updateStudents");


Route::get('/student-form', "StudentFormController@getStudentForm");
Route::post('student-form', "StudentFormController@postStudentForm");
