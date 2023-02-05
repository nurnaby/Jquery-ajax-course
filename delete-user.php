<?php
// include('db.php');
$userId = $_POST['id'];



$dbcon= mysqli_connect('localhost','root','','test')or die('connection Failed') ;
$sql = "DELETE FROM `users` WHERE id='{$userId}'";
// $result = mysqli_query($dbcon,$sql);
// echo $result;

if(mysqli_query($dbcon,$sql)){
    echo 1;
}else{
    echo 0;
}



?>