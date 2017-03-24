<!DOCTYPE html>
<html>
<head>
	<title>Greet Form</title>
</head>
<body>

<h1>{{$title}}</h1>

<form method="POST" action="/greet"></form>

{{ csrf_field() }}
<!--dapat nasa loob ng form,. kadalasan after the form tag-->

	Name: <input type="text" name="fullname">
	<button type="submit">Great!</button>
</body>
</html>