@extends("layouts.app")
@section('title', "Student Form Update")
@section('content')

<html>
<head>
	<title>Student Form Update</title>
</head>

<body>
	<form action="/edit/<?php echo $students[0]->id; ?>" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<table>
		<tr>
			<td>Name</td>
			<td><input type='text' name='name' value='<?php echo $students[0]->name; ?>' /></td>
		</tr>
		<tr>
			<td colspan='2'><input type='submit' value="Update student" /></td>
		</tr>
	</table>
	</form>
</body>
</html>