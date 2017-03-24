<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.css">
    
    <style type="text/css">
        body{
            background-image: url("chalkboard.jpg");
            background-repeat: no-repeat;
            background-size: 100% 130%;

        }
        fieldset{
            padding: 10px;
            color: white;
            border-radius: 10px;
        }
        h1{
            color: yellow;
        }
        input[type="text"]{
            background-color: darkslategrey;
            color: white;
            font-family: tahoma;
            font-weight: normal;
        }

    </style>

</head>
<body>
    <div class="container">
    @yield('content')
    </div>
</body>
</html>


