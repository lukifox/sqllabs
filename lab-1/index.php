<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQLi Lab # 2 Login Me</title>
	<link href='http://www.ahsanshabbir.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link href='../assets/css/bootstrap.min.css' rel='stylesheet'/>
	<script src='../assets/js/jquery.js'></script>
	<script src='../assets/js/lab2.js'></script>

</head>
<body>
	<div class="container" align="center">
		<h2 align="left">
			SQLi Lab # 2 
		</h2>
		<h4 class="alert alert-success" role="alert" align="right">
	    <?php include('../assets/templates/social.php');?>
		</h4>
		<hr />
		<legend>Login Page</legend>
		<?php if(isset($_GET['msg'])):?>
			<div id="msg" class="alert alert-info" role="alert">
				<?php echo $_GET['msg'];?>
			</div>
		<?php endif;?>
		<div class="form">
			<div id="error" class="alert alert-danger" role="alert" hidden>
				
			</div>
			<div id="success" class="alert alert-success" role="alert" hidden>
				
			</div>
			<fieldset>
				<input type="text" id="username" name="username"  value="admin" placeholder="username" required>
			</fieldset>
			<fieldset>
				<input type="password" id="password" value="admin123" name="password" placeholder="password" required>
			</fieldset>
			<br />
			<fieldset>
				<input  type="button" id="checkLogin" name="checkLogin" class="btn btn-primary" value="Login">
			</fieldset>
			

		</div>

		<hr />
	</div>
	
</body>
</html>