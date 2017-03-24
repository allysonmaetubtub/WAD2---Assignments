<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Students' Table</title>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.css">
	<style type="text/css">
		*{
			
		}

        table {
            border: 1px solid;
        }
	</style>
</head>
<body>

<div class="table">
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Student ID</th>
			<th>Name</th>
			<th>Course</th>
			<th>Address</th>
			<th>Contact Person</th>
			<th>Contact Number</th>	
			<th>Action</th>	
		</tr>
	</thead>
	<tbody>
		@foreach($students as $student)
		<tr>
			<td>{{ $student->student_ID }}</td>
			<td>{{ $student->name }}</td>
			<td>{{ $student->course }}</td>
			<td>{{ $student->address }}</td>
			<td>{{ $student->contact_person }}</td>
			<td>{{ $student->contact_num }}</td>
            <td>
                <a href="{{ url('students', ['id'=>$student->id]) }}">view</a>
                <a href="{{ url('students/' . $student->id . '/edit') }}">edit</a>
                <a href="#">delete</a>
            </td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>

<a href="{{ url('registration-form') }}" class="btn btn-primary">Add Student</a>
</body>
</html>
