<?php
	include('../db/config.php');
	$db = new mysqli($host,$username,$password,$database);
	if($db->connect_errno){
		die($db->connect_errno);
	}
	$sql = "Select * from products";
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQLi lab # 3 - Base64 encoded Injection</title>
	<link href='http://www.ahsanshabbir.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link href='../assets/css/bootstrap.min.css' rel='stylesheet'/>
	<script src='../assets/js/jquery.js'></script>
	<script src='../assets/js/js101.js'></script>
</head>
<body>
<div class="container">
	<h2> SQLi Injection Lab # 3  - Base64 encoded Injection</h2>
	<hr />

	<p class="lead">
		Product list
	</p>
			
		<?php if($products = $db->query($sql)):?>

			<?php while($product = $products->fetch_object()): ?>

				<div class="row"  align="center">
  					<div class="col-sm-4">
						<?=$product->name;?> 
					</div>
					<hr />
					<div class="col-sm-4">
						<img src="../assets/img/products/<?=$product->photo;?>" height=200 width=200 />
					</div>
						<div class="col-sm-4">
							<a role="button" class="btn btn-success btn-large" href="view.php?id=<?=base64_encode($product->id);?>">View Details </a><br />
						</div>
				</div>
			
			<?php endwhile;?>
		<?php endif; ?>
		<hr />
	
</div>
</body>
</html>