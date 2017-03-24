<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students' Form</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.css">
    
    <style type="text/css">
        fieldset{
            padding: 10px;
            background-color: palegreen;
            border-radius: 10px;
        }
        input[type="text"]{
            background-color: grey;
            color: white;
            font-family: tahoma;
            font-weight: normal;
        }

    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
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
    </div>
</body>
</html>
