@extends("layouts.app")
@section('title', "Student Form Registration")
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Registration Form</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <form action="{{ action('StudentController@updateStudent', ['id' => $student->id]) }}" method="post" role="form">
                {{csrf_field()}}
                    <h1>Edit:</h1>
                        <div class="form-group">
                            <label for="">Student ID:</label>
                            <input type="text" class="form-control" name="studentId" value="{{ $student->student_ID }}">
                        </div>

                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                        </div>

                        <div class="form-group">
                            <label for="">Course:</label>
                            <input type="text" class="form-control" name="course" value="{{ $student->course }}">
                        </div>

                        <div class="form-group">
                            <label for="">Address:</label>
                            <input type="text" class="form-control" name="address" value="{{ $student->address }}">
                        </div>

                        <div class="form-group">
                            <label for="">Contact Person:</label>
                            <input type="text" class="form-control" name="contactPerson" value="{{ $student->contact_person }}">
                        </div>

                        <div class="form-group">
                            <label for="">Contact Number:</label>
                            <input type="text" class="form-control" name="contactNumber" value="{{ $student->contact_num }}">
                        </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
