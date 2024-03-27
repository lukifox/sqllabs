<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQLi Lab by @Lizcoder</title>
	<link href='http://www.ahsanshabbir.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link href='assets/css/bootstrap.min.css' rel='stylesheet'/>
	<link href='assets/css/font-awesome.min.css' rel='stylesheet'/>
</head>
<body>

	<div class="container"  align="center">
	    <h2 align="left">
	    	SQLi Practice Labs by Phyo Myat Han (LizCoder)
	    </h2>
	    <h4 class="alert alert-success" role="alert" align="right">
	    	<?php include('assets/templates/social.php');?>
	    </h4>
	    <hr />
		<p class="lead">
			<span class="alert alert-warning" role="alert"><strong>Note:</strong> If you have not configured your 
			database with this lab yet, then  <a href="install.php" role="submit" class="btn btn-info">Set up Database</a>
			first. Otherwise you'll get errors.</span></span>
		</p>
		<hr />
	<div>
		<p class="lead">
			We have the followng labs at the moment..

		</p>
	</div>
	<div class="row">
	<?php
		$labs = glob('./lab*', GLOB_BRACE);
		$counter = 1;
		foreach($labs as $lab){

			$desc = file_get_contents($lab.'/metadata');
			$link = "<a href='$lab' role='submit' class='btn btn-primary small' title='$desc'>Lab - $counter</a>";

			?>
			
			 <div class="col-md-4">
			 	<?=$desc;?>
			 </div>
			 <div class="col-md-2">
			 	<?=$link?>
			</div>
			<?php
				$counter++;
				if($counter%2 == 1):
					echo "</div><div class='row'>";
				endif;

		}
	?>	
		<hr />
		</div>
		<hr />
	</div>

	
	<script src='assets/js/jquery.js'></script>
	<script src='assets/js/js101.js'></script>
</body>
</html>