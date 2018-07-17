<?php
session_start();

if (!isset($_SESSION['user']) && !isset($_SESSION['password'])){

    header('location:index.php');
}
if (isset($_POST['post'])){
    header('location:posts.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="css/customs.css" />
</head>
<body>
<nav class="nav navbar-default">
    <div class="container-fluid">
       <div class="navbar-header">
           <button class="navbar-toggle" data-toggle="mynav" data-target="collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
           </button>
           <a href="#" class="navbar-brand">BLOG POST</a>
       </div>
        <div class="collapse navbar-collapse" id="mynav">
            <ul class="nav navbar-nav">
               <li><a href="#">All Posts</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Contact us</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <form method="post">
        <input class="btn btn-success btn-new new" type="submit" name="post" value="New Post">
    </form>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
