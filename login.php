<?php
include "db_connect.php";
include 'db_config.php';
ob_start();
if(isset($_POST['submit'])) {
    $mysqli = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
	$num_rows=mysqli_num_rows($result);

	if($num_rows==1) {
	    header('Refresh: 1; shop.php');
	    

    }
	else {
		
		echo "<script>
        alert('Λάθος όνομα χρήστη ή λάθος κωδικός');
        </script>";
	}
}
ob_end_flush();
?>

<!DOCTYPE html>

<html lang="gr">

<head>
	<title> HOME </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>

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
	<form action="login.php" method="post">
			
			        <h2>FOR SHOP, PLEASE LOGIN IN THIS PAGE </h2>
<br>					
					<h1>Login</h1>
<br>
		
					<label for="email"><b>email</b></label><br><br>
					<input class="form-control" id="email" type="text" name="email" required>
<br><br><br>
					<label for="password"><b>Password</b></label><br><br>
					<input class="form-control" id="password"  type="password" name="password" required>
<br><br><br>
					<input class="button" type="submit" id="login" name="submit" value="Login"><br><br><br>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	
</script>
<center>
	<BR>
	<h2>SHOPING TIME</h2>
	<BR>
	<a href="REG.php">
	<img width="220 " height="296" src="img/tshirt1.jpg"></a>
	<a href="REG.php">
	<img width="220 " height="296" src="img/tshirt2.jpg"></a>
	<a href="REG.php">
	<img width="220 " height="296" src="img/tshirt3.jpg"></a>
	<BR>
	<BR>
	<p>Κανονική εφαρμογή.Στρογγυλή λαιμόκοψη.Στάμπα στο στήθος.Κοντά μανίκια.
	Σύνθεση: 100% Cotton</p>
	<BR>
	<a href="REG.php">
	<img width="380 " height="296" src="img/cd1.jpg"></a>
	<BR>
	<p>1)What a Girl Wants. 2)Won't Give You .3)Why Not.4)Won't Give You.5).Whateve</p>
	<BR>
	<a href="REG.php">
	<img width="380 " height="296" src="img/cd2.jpg"></a>
	<BR>
	<p>1)Superstar. 2)Sweet Suga Honey!.3)Say My Name.4)Ssessesse.</p>
	<BR>
	<a href="REG.php">
	<img width="380 " height="296" src="img/cd3.jpg"></a>
	<BR>
	<p>1)Volume Up. 2)You Know .3)Mirror Mirror.</p>
	<BR>
	</center>
</body>
</html>