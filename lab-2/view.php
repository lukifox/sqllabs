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
	$sql = "Select * from products where id = {$id}";
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQLi lab # 2 View Product</title>
	<link href='http://www.ahsanshabbir.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link href='../assets/css/bootstrap.min.css' rel='stylesheet'/>
	<script src='../assets/js/jquery.js'></script>
	<script src='../assets/js/js101.js'></script>
</head>
<body>
<div class="container">
	<h2> SQLi Injection Lab # 2</h2>
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
		<?php else:
			echo $db->error;?>
		<?php endif; ?>
		<hr />

</div>

	
</div>
</body>
</html>