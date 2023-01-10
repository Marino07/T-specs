<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="pozadina_p">

	<ul class="menu">
		<li><a href="index.html">Home</a></li>
		<li><a href="logout.php">Odjava</a></li>
	</ul>
	<h1>Ovo je znak da ste prijavljeni<br/>Pozdrav, <?php echo $user_data['user_name']; ?>
	</h1>

	<br>
	
</body>
</html>