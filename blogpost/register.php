<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/customs.css">
</head>
<body>
<div class="container bs_example">
<form method="post">
    <legend>
        <h1>Register With Us</h1>
        <p class="cent">Its free and always will be</p>
    </legend>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <input type="text" name="user_first_name" title="Enter your first name" class="form-control" placeholder="First name">
        </div>
        <div class="form-group col-sm-6">
            <input type="tel" name="user_last_name" title="Enter your last name" class="form-control" placeholder="Last name">
        </div>
        <div class="form-group">
            <input type="text" name="user_phone" title="Enter your phone number" placeholder="Phone number" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="email" name="user_email" title="Enter a valid email address" placeholder="Email Address" class="form-control"/>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <legend>Gender:</legend>
                </div>
                <div class="col-sm-10">
                    <input type="radio" name="gender" value="Male"/>Male<br>
                    <input type="radio" name="gender" value="Female"/> Female
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="password" name="user_new_pass" title="Create a new password" class="form-control" placeholder="New password"/>
        </div>
        <div class="form-group">
            <button type="button" name="user_reg" class="btn btn-outline-success">Sign up</button>
        </div>
    </div>
</form>
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>
<?php
?>