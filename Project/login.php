<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_user = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $check_user);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $email; 
        header('location: dashboard.php'); 
    } else {
        echo "<script>alert('Incorrect Email or Password!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
<style>
    body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: #34495e;
}

.loginbox{
	width: 320px;
	height: 420px;
	background: #191919;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}

.signupbox{
	width: 320px;
	height: 620px;
	background: #191919;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}

h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}

p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}

input{
	width: 100%;
	margin-bottom: 20px;
}

input[type="text"], input[type="password"]{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}

input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background: #f1c40f;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}

a{
	text-decoration: none;
	font-size: 14px;
	color: #fff;
}

a:hover{
	color: #f1c40f;
}

</style>
</head>
<body>
	<div class="loginbox">
		<h1>Login Here</h1>
		    <form method="post" action="login.php">
			<p>Email Address</p>
			<input type="text" name="email" placeholder="Enter Email Address">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			<a href="signup.html">Don't have an account? Sign Up</a>
		</form>
	</div>
</body>
</html>
