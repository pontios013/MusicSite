
<!DOCTYPE html>
<html  lang="gr">
<head>
	<title>ACCOUNT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{
			background-image: url("13.jpg");
			/*background-color: #000000;*/
		}

		nav{
			width: 145%;
			height: 100px;
			background-color: #fff;
		}

		ul{
			margin: 0px;
			padding: 0px;
			list-style: none;
			float: left;
			text-align:center;
		}

		ul li{
			list-style: none;
			display: block;
			float: left;
			line-height: 100px;
		}

		ul li a{
			display: block;
			text-decoration: none;
			font-size: 30px;
			font-family: Algerian;
			color: #1e1e1e;
			padding: 0 100px;
			text-align: center;
		}
		ul li a:hover {
			background-color: rgb(203, 184, 176);
		}
		.block1000 {

		text-align: center;
		width: 75%;
		height: 3100px;
		background: rgb(255,176,181);
		opacity: .95;
		box-shadow: 0 2px 120px;
	    font-family: Algerian;
		}
		.button {
 		 	background-color: white;
 		    color: black;
 			padding: 16px 32px;
  			border: 4px solid #555555;
  			transition-duration: 0.4s;
  			cursor: pointer;
		}

		.button:hover {
  			background-color: #555555;
  			color: white;
		}

		input[type=text] {
		  width: 130px;
		  box-sizing: border-box;
		  border: 2px solid #ccc;
		  border-radius: 4px;
		  font-size: 16px;
		  background-color: white;
		  background-position: 10px 10px; 
		  background-repeat: no-repeat;
		  padding: 12px 20px 12px 40px;
		  -webkit-transition: width 0.4s ease-in-out;
		  transition: width 0.4s ease-in-out;
		}

		input[type=text]:focus {
		  width: 100%;
		}

				p.round {
		  border: 2px solid black;
		  border-radius: 8px;
		}

		.post{
		  width: 333px;
		  height: 267px;
		  position: relative;
		  cursor: pointer;
		}
		.post:hover .post-s{
		  width: 333px;
		  height: 267px;
		}
		.post img {
		  display: block;
		  width: 333px;
		  height: 267px;

		}
		.post-s{
		  width: 0px;
		  height: 267px;
		  background: rgba(203, 184, 176, 0.71);
		  position: absolute;
		  top: 0;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  overflow: hidden;
		  transition: 0.7s ease;
		}
		.post-s h5{
		  color: white;
		  font-size: 20px;
		  border: 6px solid white;
		  padding: 10px 30px;
		}

	</style>
	
</head>


<body>
<?php
include "db_connect.php";
include 'db_config.php';


if(isset($_POST['users'])) {
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password)
    VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$password')";

	if ($conn->query($sql) == TRUE) {
        echo "Επιτυχής εγγραφή, παρακαλώ συνδεθείτε";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<header>
	<nav>
		<ul>
		<li><a href="index.html">HOME </a></li>
		<li><a href="testlogin.php"">SHOP</a></li>
		<li><a href="info.html">INFO</a></li>
		<li><a href="contact.php">CONTACT</a></li>
		<li><a href="reg.php">REGISTER</a></li>
		</ul>
		</nav>
</header>

<tbody>
<center>
	<div class="container">
	<center>
		<BR><BR><BR>
		<img src="56.jpg">
		<BR><BR><BR>

<div class="block1000" align="center">
	<br>
	<center>
		<BR><BR>
		
				<center>	
	<form action="reg.php" method="post">
		<br>
			
			
					<h1>CREATE YOUR ACCOUNT</h1>
<br>
		
					<label for="firstname"><b>First Name</b></label><br><br>
					<input class="form-control" id="firstname" type="text" name="firstname" required>
<br><br><br>
					<label for="lastname"><b>Last Name</b></label><br><br>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>
<br><br><br>
					<label for="email"><b>Email Address</b></label><br><br>
					<input class="form-control" id="email"  type="email" name="email" required>
<br><br><br>
					<label for="phonenumber"><b>Phone Number</b></label><br><br>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>
<br><br><br>
					<label for="password"><b>Password</b></label><br><br>
					<input class="form-control" id="password"  type="password" name="password" required>
<br><br><br>
					<input class="button" type="submit" id="register" name="create" value="Sign Up"><br><br><br>
</form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	
</script>
</body>
</html>