<?php
$user_first_Err=$user_last_Err=$user_phone_Err=$user_email_Err=$gender_Err=$user_pass_Err=$user_pass1_Err="";
$user_first=$user_last=$user_phone=$user_email=$gender=$user_pass=$user_pass1="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST['user_first'])){
        $user_first_Err='Please fill out this field';
    }else{
        $user_first=$_POST['user_first'];
        if (!preg_match("/^[a-zA-z0-9 \s]+$/", $user_first)){
            $user_first_Err='Name can only contain letters or numbers';
        }
    }
    if (empty($_POST['user_last'])){
        $user_last_Err='Please fill out this field';
    }else{
        $user_last=$_POST['user_first'];
        if (!preg_match("/^[a-zA-z0-9 \s]+$/", $user_last)){
            $user_last_Err='Name can only contain letters or numbers';
        }
    }
    if(empty($_POST['user_phone'])){
        $user_phone_Err='Phone number required';
    }
    else{
        $user_phone=$_POST['user_phone'];
        if (!preg_match("/^\d{9,13}?[0-9]$/", $user_phone)){
            $user_phone_Err='Enter a valid phone number';
        }
    }
    if(empty($_POST['user_email'])){
        $user_email_Err='Email required';
    }
    else{
        $user_email=$_POST['user_email'];
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL) == false){
            $user_email_Err='Invalid email address';
        }
    }
    if(!isset($_POST['gender'])){
        $gender_Err='Gender not defined';
    }
    else{
        $gender=$_POST['gender'];
    }
    if(empty($_POST['user_pass'])){
        $user_pass_Err='Please create a password';
    }
    else{
        $user_pass=$_POST['user_pass'];
    }
    if(empty($_POST['user_pass1'])){
        $user_pass1_Err='must confirm password';
    }
    else{
        $user_pass1=$_POST['user_pass1'];
    }
    if ($user_pass == $user_pass1){
        $final_pass=md5($user_pass);
    }else{
        $user_pass1_Err='Password mismatch detected';
        $user_pass='';
        $user_pass1='';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/customs.css" />
</head>
<body>
<nav class="nav navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target="collapse" data-toggle="#mynav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">BLOG POST</a>
        </div>
        <div class="collapse navbar-collapse" id="mynav">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About Blog</a> </li>
                <li><a href="#">Blog</a> </li>
            </ul>
            <form method="post" class="navbar-form navbar-right">
                <div class="form-group">
                    <label for="user_log">Email or phone :</label>
                    <input type="text" name="user_name" class="form-control" id="user_log" placeholder="Email or phome"/>
                </div>
                <div class="form-group">
                    <label for="user_pass">Password :</label>
                    <input type="password" name="user_pass" class="form-control" id="user_pass" placeholder="password"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="login"/>
                </div><br />
                <div class="form-group">
                    <a href="#">forgot password</a>
                </div>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5 col-xm-12">
            <h1 class="cent">WELCOME TO BLOG</h1>
        </div>
        <div class="col-sm-7 col-xm-12">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                <legend>
                    <h1 class="cent">Register With Us</h1>
                </legend>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="user_first" class="col-sm-2">First name:</label>
                            <div class="col-sm-10">
                                <input type="text" id="user_first" value="<?php echo htmlspecialchars($user_first);?>" class="test" name="user_first" placeholder="First name"/>
                                <span class="error"><?php echo $user_first_Err;?></span>
                            </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="user_last" class="col-sm-2">Last name:</label>
                            <div class="col-sm-10">
                                <input type="text" id="user_last"  value="<?php echo htmlspecialchars($user_last);?>" class="test" name="user_last" placeholder="Last name"/>
                                <span class="error"><?php echo $user_last_Err;?></span>
                            </div>
                    </div>
                    <div class="form-row">
                        <label for="user_phone" class="col-sm-2">Phone number :</label>
                        <div class="col-sm-10">
                        <input type="text" name="user_phone" id="user_phone"  value="<?php echo htmlspecialchars($user_phone);?>" class="test" placeholder="Phone number"/>
                            <span class="error"><?php echo $user_phone_Err;?></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="user_email" class="col-sm-2">Email address :</label>
                        <div class="col-sm-10">
                        <input type="text" name="user_email" id="user_email"   value="<?php echo htmlspecialchars($user_email);?>" class="test" placeholder="Email address"/>
                            <span class="error"><?php echo $user_email_Err;?></span>
                        </div>
                    </div><br /><br />
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <legend>Gender</legend>
                            </div>
                            <div class="col-sm-10">
                                <input type="radio" name="gender" value="Male"/> Male<br />
                                <input type="radio" name="gender" value="Female"/> Female
                                <span class="error"><?php echo $gender_Err;?></span>
                            </div>
                        </div>
                    </div><br />
                    <div class="form-group">
                        <label for="user_pass" class="col-sm-2">Create new password :</label>
                            <div class="col-sm-10">
                                <input type="password" name="user_pass"   value="<?php echo htmlspecialchars($user_pass);?>" class="test" id="user_pass" placeholder="New password"/>
                                <span class="error"><?php echo $user_pass_Err;?></span>
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="user_pass1" class="col-sm-2">Confirm new password :</label>
                            <div class="col-sm-10">
                                <input type="password" name="user_pass1"  value="<?php echo htmlspecialchars($user_pass1);?>" class="test" id="user_pass1" placeholder="Confirm new password"/>
                                <span class="error"><?php echo $user_pass1_Err;?></span>
                            </div>
                        <br />
                        <div class="form-group">
                            <input type="submit" name="register" value="Sign up" class="btn btn-success"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>