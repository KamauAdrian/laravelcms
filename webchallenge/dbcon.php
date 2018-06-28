<?php

$conn_error='Could not connect to database';

$mysql_host='localhost';
$mysql_user_name='root';
$mysql_password='';
$mysql_database='webchall';
$conn=@mysqli_connect($mysql_host,$mysql_user_name,$mysql_password,$mysql_database);
?>