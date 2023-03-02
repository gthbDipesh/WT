<?php
session_start(); 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_email);
    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('Email already exists!');</script>";
    } else {
  
        $insert_user = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if (mysqli_query($conn, $insert_user)) {
            echo "<script>alert('Signup Successful!');</script>";
        } else {
            echo "Error: " . $insert_user . "<br>" . mysqli_error($conn);
        }
    }
}
?>
