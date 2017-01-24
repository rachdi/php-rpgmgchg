<?php 



$products=require_once('products.php');




?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<h1>Listes Des Produits</h1>


	<?php foreach ($products as  $value):?>

		<table class="ui celled table">
			<thead>
				<tr><th><?= $value->getId()?></th>
					<th><?= $value->getName()?></th>
					<th><?= $value->getPrice()?></th>
					<th><?=(method_exists($value, "getBrand")) ?$value->getBrand():null?></th> 
					<th><?=(method_exists($value, "getProductorName")) ? $value->getProductorName():null?></th>
					<th><?=(method_exists($value, "ExpireAt")) ? $value->ExpireAt():null?></th> 
				</tr></thead>
			</table>



		<?php endforeach; ?>














	</table>

</body>
</html>