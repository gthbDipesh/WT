<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
session_unset();
session_destroy();
header('location: index.html'); 

/*\
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['logout'])){
    session_destroy(); 
    header('location: index.html'); 
}

mysqli_close($conn); */
?>