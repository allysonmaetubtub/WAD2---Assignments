@extends('layouts.master')
@section('title', "Student Form Registration")
@section('content')
    <div class="col-md-8"> 
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
         <div class="row">
                <fieldset>
                <form action="/registration-form" method="POST" role="form">
                {{csrf_field()}}
                    
                    <legend><h1>Please fill out the following:</h1></legend>
                        <div class="form-group">
                            <label for="">Student ID</label>
                            <input type="text" class="form-control" name="studentId">
                        </div>

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="">Course</label>
                            <input type="text" class="form-control" name="course">
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>

                        <div class="form-group">
                            <label for="">Contact Person</label>
                            <input type="text" class="form-control" name="contactPerson">
                        </div>

                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" name="contactNumber">
                        </div>
    
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                    <button type="reset" class="btn btn-primary">RESET</button>
                </form>
                </fieldset>
            </div>
    </div>
@endsection