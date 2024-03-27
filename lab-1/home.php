<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lab # 1 User Home</title>
	<link href='http://www.ahsanshabbir.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link href='../assets/css/bootstrap.min.css' rel='stylesheet'/>
	<script src='../assets/js/jquery.js'></script>
	<script src='../assets/js/lab2.js'></script>

</head>
<?php
	if(isset($_SESSION['user'])){
?>
	<div class="container" align="center">
		<h2 class="alert alert-success" role="alert"> Congrats ... Challenge Completed! </h2>
		</hr>
		<p class="lead">
			Congrats, You're logged in as "<strong> <?=$_SESSION['user'];?></strong>"
			
		</p>
		<p> <a href="logout.php" class="btn btn-danger" role="button">Click here to Logout</a> </p>

	</div>
<?php 
	}else{
		echo "Not logged in";
	}
?>
