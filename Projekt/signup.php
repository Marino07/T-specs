<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Molimo vas unesite valjane informacije!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Napravi račun</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="pozadina_p">

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Napravi račun</div>
			Korisničko ime:
			<input id="text" type="text" name="user_name"><br><br>
			Lozinka:		
			<input id="text" type="password" name="password"><br><br>
			Ponovite lozinku:
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Napravi račun"><br><br>

			<a href="login.php">Kliknite za prijavu!</a><br><br>
			<a href="index1.html">Prijavite se kao Gost</a><br><br>
		</form>
	</div>
</body>
</html>