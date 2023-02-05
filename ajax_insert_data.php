<?php
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$pass = $_POST['user_pass'];
$dbcon= mysqli_connect('localhost','root','','test')or die('connection Failed') ;

$sql = "INSERT INTO users(name,email,password)VALUES('{$name}','{$email}','{$pass}') ";
// $result = mysqli_query($dbcon,$sql)or die('sql query failed');
if(mysqli_query($dbcon,$sql)){
  echo 1;
}else{
echo 0;
}


?>