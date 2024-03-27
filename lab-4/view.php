<?php

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		die("No product id provided");
	}
	include('../db/config.php');
	$db = new mysqli($host,$username,$password,$database);
	if($db->connect_errno){
		die($db->connect_errno);
	}
	$sql = "SELECT * FROM products WHERE id=".base64_decode($id)." LIMIT 0,1";
		

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQLi lab # 3 View Product</title>
	<link href='http://www.ahsanshabbir.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link href='../assets/css/bootstrap.min.css' rel='stylesheet'/>
	<script src='../assets/js/jquery.js'></script>
	<script src='../assets/js/js101.js'></script>
</head>
<body>
<div class="container">
	<h2 class="alert alert-info" role="alert"> SQLi Injection Lab # 3 - Base64 Encoded Parameters Injection</h2>
	<hr />
	<h4 class="alert alert-success" role="alert" align="right">
	    <?php include('../assets/templates/social.php');?>
	</h4>
	<p class="lead">
		Product Detail
	</p>
			
		<?php if($products = $db->query($sql)):?>

			<?php while($product = $products->fetch_object()): ?>

				<div class="row" align="center">
  					<div class="col-sm-4">
						<italic> <?=$product->name;?> </italic>
					</div>
					<hr />
					<div class="col-sm-4">
						<img src="../assets/img/products/<?=$product->photo;?>" height=200 width=200 />
					</div>
						<div class="col-sm-2">
							Price <strong> <?=$product->price;?> $</strong>
						</div>
						<div class="col-sm-4">
							 <?=$product->description;?>
						</div>

				</div>
			
			<?php endwhile;?>
		<?php else:?>
			Database Error
		<?php endif; ?>
		<hr />

</div>

	
</div>
</body>
</html>