@extends("layouts.app")
@section('title', "Student List")
@section('content')
//<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="#" class="btn btn-primary">Add Student</a>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Column 1</th>
				<th>Column 2</th>
				<th>Column 3</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Value for Column 1</td>
				<td>Value for Column 2</td>
				<td><a href="#" class="btn btn-success">Edit</a>
					<a href="#" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>