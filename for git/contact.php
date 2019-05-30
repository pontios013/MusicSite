<!DOCTYPE html>
<html  lang="gr">

<head>
	<title> CONTACT </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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


if(isset($_POST['contact'])) {
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
	
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contact (name,email, text)
    VALUES ('$name', '$email', '$text')";

	if ($conn->query($sql) === TRUE) {
        echo "SUCCESSFULLY";
        
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
	<form action="contact.php" method="post">
		<br>
			
			
					<h1>CONTACT WITH US</h1>
<br>
		
					<label for="Name"><b>Name</b></label><br><br>
					<input class="form-control" id="name" type="text" name="name" required>
<br><br><br>
					<label for="email"><b>email</b></label><br><br>
					<input class="form-control" id="email"  type="text" name="email" required>
<br><br><br>
					<label for=" SOME TEXT"><b> SOME TEXT</b></label><br><br>
					<input type="text" name="subject" value="" placeholder="Some text..." " style="height:200px">
<br><br><br>

					<input class="button" type="submit" id="contact" name="create" value="Sent us"><br><br><br>
					
</form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	
</script>


</body>
</html>
	