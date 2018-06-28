<?php
$user_first_name_err=$user_last_name_err=$user_phone_err=$user_email_err=$user_gender_err=$user_pass_err=$message="";
$user_first_name=$user_last_name=$user_phone=$user_email=$user_gender=$user_pass="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST['user_first_name'])){
        $user_first_name_err='Please Fill out this field';
    }else{
        $user_first_name=$_POST['user_first_name'];
        if (!preg_match("/^[a-zA-Z0-9 \s]+$/", $user_first_name)){
            $user_first_name_err='Name can only contain letters or numbers';
        }

    }
    if (empty($_POST['user_last_name'])){
        $user_last_name_err='Please Fill out this field';
    }else{
        $user_last_name=$_POST['user_last_name'];
        if (!preg_match("/^[a-zA-Z0-9 \s]+$/", $user_last_name)){
            $user_last_name_err='Name can only contain letters or numbers';
        }
    }
    if (empty($_POST['user_phone_num'])){
        $user_phone_err='Phone number required';
    }else{
        $user_phone=$_POST['user_phone_num'];
        if (!preg_match("/^\d{9,13}?[0-9]$/", $user_phone)){
            $user_phone_err='Enter a valid phone number';
        }
    }
    if (empty($_POST['user_email_add'])){
        $user_email_err='Email must be provided';
    }else{
        $user_email=$_POST['user_email_add'];
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL) == false){
            $user_email_err='Invalid email address';
        }
    }
    if (!isset($_POST['gender'])){
        $user_gender_err='Your Gender';
    }
    if (empty($_POST['user_password'])){
        $user_pass_err='Please add a password';
    }else{
        $user_pass=$_POST['user_password'];
        $final_pass=md5($user_pass);
    }
    if (empty($user_first_name_err) && empty($user_last_name_err) && empty($user_phone_err) && empty($user_email_err) &&empty($user_pass_err)){
        include 'dbcon.php';
        $result=mysqli_query($conn,"INSERT INTO members VALUES ('','$user_first_name','$user_last_name','$user_phone','$user_email','$user_gender','$final_pass')");

                    $user_first_name='';
                    $user_last_name='';
                    $user_phone='';
                    $user_email='';
                    $user_gender='';
                    $user_pass='';
        if ($result){
$message='Registered Successfully';
        }else{
            $message='Registration failed';
        }



    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
</head>
<body>
<nav class="nav navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target="collapse" data-toggle="#mynav">
                <Span class="icon-bar"></Span>
                <Span class="icon-bar"></Span>
                <Span class="icon-bar"></Span>
            </button>
            <a  class="navbar-brand" href="#">BLOG POST</a>
        </div>
        <div class=" collapse navbar-collapse" id="mynav">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <label for="user_first_name">Email or phone:</label>
                    <input type="text" name="user_name_log" class="form-control" id="user_first_name" placeholder="Email or phone"/>
                </div>
                <div class="form-group">
                    <label for="user_last_name">Password:</label>
                    <input type="text" name="user_pass_log" class="form-control" id="user_last_name" placeholder="password"/>
                </div>
                <div class="form-group">
                    <button type="button" name="user_log" class="btn btn-outline-success"><span class="glyphicon glyphicon-log-in"></span> Sign in</button>
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
        <div class="col-xm 12 col-sm-5">
            <h1>WELCOME TO BLOG</h1>
            <img src="images/im.png">
        </div>
        <div class="col-sm-7 col-xm-12 bs_example1">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                <legend>
                    <h1 class="cent">Register With Us</h1>
                    <p class="cent">its free and will always be</p>
                </legend>
                <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="user_first_name">Your first name:</label>
                    <input type="text" id="user_first_name" class="test" value="<?php echo htmlspecialchars($user_first_name)?>" name="user_first_name" placeholder="First name"/>
                    <span class="error"><?php echo $user_first_name_err;?></span>
                </div>
                <div class="form-group col-sm-6">
                    <label for="user_last_name">Your last name:</label>
                    <input type="text"id="user_last_name" class="test" value="<?php echo htmlspecialchars($user_last_name)?>" name="user_last_name" placeholder="Last name"/>
                    <span class="error"><?php echo $user_last_name_err?></span>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="user_phone_num">Your phone number:</label>
                        <input type="text" id="user_phone_num" class="test" value="<?php echo htmlspecialchars($user_phone)?>" name="user_phone_num" placeholder="Phone number"/>
                        <span class="error"><?php echo $user_phone_err?></span>
                    </div>
                    <div class="form-group">
                        <label for="user_email_add">Your email address:</label>
                        <input type="text" id="user_email_add" class="test" value="<?php echo htmlspecialchars($user_email)?>" name="user_email_add" placeholder="Email address"/>
                        <span class="error"><?php echo $user_email_err?></span>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <legend>Gender:</legend>
                            </div>
                            <div class="col-sm-10">
                                <input type="radio" name="gender" value="Male"/> Male<br>
                                <input type="radio" name="gender" value="Female"/> Female
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_password">Create new password:</label>
                        <input type="password" id="user_password" class="test" value="<?php echo htmlspecialchars($user_pass)?>" name="user_password" placeholder="New password"/>
                        <span class="error"><?php echo $user_pass_err?></span>
                    </div>
                    <div class="form-group">
                        By clicking <a href="#">Sign Up </a>, you agree to our <a href="#">Terms,
                        Data Policy</a> and <a href="#">Cookie Policy.</a> <br />You may
                        receive SMS notifications from us and can
                        opt out at any time.
                    </div>
                    <div class="form-group">
                        <button type="button" name="user_register" id="user_register" class="btn btn-outline-success">Sign up</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
