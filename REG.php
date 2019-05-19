
<!DOCTYPE html>
<html  lang="gr">
<head>
	<title>ACCOUNT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>


<body>
<?php
include "db_connect.php";
include 'db_config.php';


if(isset($_POST['create'])) {
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

	if ($conn->query($sql) === TRUE) {
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
		<li><a href="login.php"">SHOP</a></li>
		<li><a href="info.html">INFO</a></li>
		<li><a href="contact.php">CONTACT</a></li>
		<li><a href="REG.php">REGISTER</a></li>
		</ul>
	</nav>
</header>

<tbody>
<center>


<center>
	<br><br><br>
<!--img width="1116 " height="462" src="12.jpg"-->
</center>



	<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br>

<div class="block1000">
	<br>
	<center>
		<BR><BR>
		<table border="5" bgcolor="#A9A9A9" width="612" height="783">	
			<td>
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