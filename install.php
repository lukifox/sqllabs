<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQLi lab # 1</title>
	<link href='http://www.ahsanshabbir.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link href='assets/css/bootstrap.min.css' rel='stylesheet'/>
	<script src='assets/js/jquery.js'></script>
	<script src='assets/js/js101.js'></script>
</head>
<body>
	<div class="container">
		<h1>
			SQLi Lab installation
		</h1>
		<hr />
		<p class="lead">
			This script will install this lab on your system. Please fill in the form.
		</p>
		<div class="form" id="dbForm">
			<fieldset>
				<input type="text" id="dbHost" placeholder="localhost" value="localhost" required="true">
			</fieldset>
			<fieldset>
				<input type="text" id="dbUser" placeholder="root"  value="root" required="true">
			</fieldset>
			<fieldset>
				<input type="password" id="dbPass" placeholder="password">
			</fieldset>
			<fieldset>
				<input type="text" id="db" value="" placeholder="Database name" hidden>
			</fieldset>
			<div>
			<br />
			<fieldset>
				<button id="installDB" class="btn btn-primary"> Install Lab </button>
			</fieldset>
		</div>
	</div>
	<hr />
	<div id="status">

	</div>
	<hr />
	</div>
</body>
