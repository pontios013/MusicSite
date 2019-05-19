<!DOCTYPE html>
<html  lang="gr">

<head>
	<title> CONTACT </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
include "db_connect.php";
include 'db_config.php';


if(isset($_POST['create'])) {
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['subject'];
	
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contact (name,email, text)
    VALUES ('$name', '$email', '$text')";

	if ($conn->query($sql) === TRUE) {
        echo "ΣΤΑΛΘΕΙΚΕ ΕΠΥΤΗΧΟΣ";
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
		<li><a href="shop.html">SHOP</a></li>
		<li><a href="info.html">INFO</a></li>
		<li><a href="contact.php">CONTACT</a></li>
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
	<form action="contact.php" method="post">
		<br>
			
			
					<h1>CREATE YOUR ACCOUNT</h1>
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
	