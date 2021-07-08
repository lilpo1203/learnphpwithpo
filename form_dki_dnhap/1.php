<?php
session_start();
require_once("register.php");
register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <form action=""method="POST">
            <div class="form-group">
                <label for="Fullname">FullName</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter fullname" class="form-control">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter email" class="form-control">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="text" id="password" name="password" placeholder="Enter password" class="form-control">
            </div>
            <button class="btn btn-success">Register</button>
        </form>
    </div>
</body>
</html>
