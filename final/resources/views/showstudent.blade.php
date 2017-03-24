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

<h1>Profile:</h1>
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
		<tr>
			<td>{{ $student->student_ID }}</td>
			<td>{{ $student->name }}</td>
			<td>{{ $student->course }}</td>
			<td>{{ $student->address }}</td>
			<td>{{ $student->contact_person }}</td>
			<td>{{ $student->contact_num }}</td>
			<td><a href="{{ url('students/' . $student->id . '/edit') }}">edit</a></td>
		</tr>
	</tbody>
</table>
</div>

</body>
</html>
