<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .table{
            padding-left: 700px;
            
        }
        .header{
            padding-left: 730px;
            padding-bottom: 50px;
            padding-top: 80px;
        }
        .registerform {
        }

        .btn-primary {
            background-color: #27baba;
        }
    </style>
   <script>
        var check = function() {
        if (document.getElementById('pass').value ==
            document.getElementById('cpass').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password does not match';
        }
        }
        function check_pass() {
        if (document.getElementById('pass').value ==
                document.getElementById('cpass').value) {
            document.getElementById('submit').disabled = false;
        } else {
            document.getElementById('submit').disabled = true;
        }
        }
    </script>
    <title>File Uploader</title>
    
</head>
<body>
    <div class="registerform">
            <header class="header">
                <h1> Registration Form</h1>
            </header>
            <div class="table">
                <form method="POST" enctype="multipart/form-data" action="form_handler.php">
                <div class="form-group">
                <div class="col-md-4 mb-3">
            <label for="complete_name">Complete Name</label>
            <input type="text" class="form-control" id="complete_name" name="complete_name"  placeholder="Enter Complete Name">
        </div>
        <div class="form-group">
        <div class="col-md-4 mb-3">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
        <div class="col-md-4 mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
        <div class="col-md-4 mb-3">
            <label for="cpass">Confirm Password</label>
            <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm your Password">
            <span id='message'></span>
        </div>
        <div class="form-group">
        <div class="col-md-4 mb-3">
            <label for="picture_path">Picture</label>
            <input type="file" class="form-control" id="picture_path" name="picture_path">
            </div>
        <div class="form-group row">
            <input class="btn btn-primary btn-lg" type="submit" value="Submit" style="margin-left: 300px;">
        </div>





        </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>