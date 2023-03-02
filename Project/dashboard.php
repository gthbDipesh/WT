

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: #333;
	color: #fff;
	padding: 20px;
}

header h1 {
	margin: 0;
}

.about {
	padding: 20px;
}

.projects {
	padding: 20px;
}

.projects ul {
	list-style-type: none;
	padding: 0;
}

.projects li {
	margin-bottom: 10px;
}

.projects li a {
	color: #333;
	text-decoration: none;
}

.projects li a:hover {
	color: #666;
}
#button{
    position:absolute;
    top:25px;
    right:10px;

}
button{
    background-color: red;
    color:white;
}
    </style>
	<title>My Portfolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>My Portfolio</h1>
        
        <a id="button" href="logout.php"><Button name="logout">LogOut</Button></a>
	</header>

	
	<section class="about">
		<h2>About Me</h2>
		<p>Hi, my name is Dipesh Dhakal and I'm a web developer.</p>
		<p>I have experience in HTML, CSS, JavaScript, and PHP.</p>
	</section>
	
	<section class="projects">
		<h2>My Projects</h2>
		<ul>
			<li><a href="#">Project 1</a></li>
			<li><a href="#">Project 2</a></li>
			<li><a href="#">Project 3</a></li>
		</ul>
	</section>
</body>
</html>
