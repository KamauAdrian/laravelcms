<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/customs.css">
</head>
<body>
<nav class="nav navbar-default">
    <div class="container-fluid">
<div class="navbar-header">
    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">BLOG POST</a>
</div>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav">
<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
                <li><a href="#">About blog</a> </li>
                <li><a href="#">Blog</a> </li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" id="user_name" class="form-control" placeholder="Your Username"/>
                    <input type="password" id="user_pass" class="form-control" placeholder="Password"/>
                    <input type="submit" id="user_log" class="btn btn-default navbar-btn" value="Sign in"/><br />
                    <a href="#">forgot password</a>
                </div>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="col-sm-5">
        <h1>WELCOME TO BLOG</h1>
<img src="images/im.png">
    </div>
    <div class="col-sm-7">
        <div class="bs_example1">
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
                    <input type="text" name="user_last_name" title="Enter your last name" class="form-control" placeholder="Last name">
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
    </div>
</div>







<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>
<?php
?>