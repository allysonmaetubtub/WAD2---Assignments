<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Students' Table</title>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.css">
	<style type="text/css">
		.container{
			margin-top: 5%;
		}
		table {
            border: 1px solid;
        }
	</style>
</head>
<body>
<div class="container">
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
			<!--added these: -->
				<a class="btn btn-primary" href="{{ url('students', ['id'=>$student->id]) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
                <a class="btn btn-primary" href="{{ url('students/' . $student->id . '/edit') }}"><i class="glyphicon glyphicon-pencil"></i></a>
                <!-- <a href="{{ route('deleteStudent', ['id'=>$student->id]) }}">delete</a>					                 -->

                <form action="{{ route('deleteStudent', ['id' => $student->id]) }}" method="POST" style="display: inline;">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <button type="submit" name="delete" value="Delete" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                </form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>

<a href="registration-form" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>

</div>
</body>
</html>