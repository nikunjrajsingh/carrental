<?php 

session_start();
header('location:index.html');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['email'];
$pass = $_POST['psw'];
$pass = $_POST['psw-repeat'];

$s = " select * from usertable where name = '$name'";

$result = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

if (!$num || mysqli_num_rows($num) == 0)

if($num == 1) {
    echo" Username Already Taken";
}else{
    $reg = " insert into usertable(name, password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}

?>