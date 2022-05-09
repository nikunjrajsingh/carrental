<?php 

session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['email'];
$pass = $_POST['psw'];
$pass = $_POST['psw-repeat'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

if (!$num || mysqli_num_rows($num) == 0)

if($num == 1) {
    header('location:index.html');
}else{
   header('location:ride');
}

?>