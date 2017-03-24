@extends("layouts.app")
@section('title', "Student Form Update")
@section('content')
//<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Form Update</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <form action="/student-form" method="POST" role="form">
                {{csrf_field()}};
                    <h1>Please fill out the following:</h1>
                        <div class="form-group">
                            <label for="">Student ID:</label>
                            <input type="text" class="form-control" name="studentId">
                        </div>

                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="">Course:</label>
                            <input type="text" class="form-control" name="course">
                        </div>

                        <div class="form-group">
                            <label for="">Address:</label>
                            <input type="text" class="form-control" name="address">
                        </div>

                        <div class="form-group">
                            <label for="">Contact Person:</label>
                            <input type="text" class="form-control" name="contactPerson">
                        </div>

                        <div class="form-group">
                            <label for="">Contact Number:</label>
                            <input type="text" class="form-control" name="contactNumber">
                        </div>
                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>