<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSSWORD', '');
define('DB_NAME', 'login');

// Try connecting to database 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSSWORD, DB_NAME);


//CHECK THE CONNECTION 

if($conn == false) {
    dir('Error: Cannot connect');
}


?>