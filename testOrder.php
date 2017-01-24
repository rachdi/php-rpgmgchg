<?php 
require_once('data/users.php');
require_once('data/products.php');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Le premier utilisateur achète un de vos légumes</h1>
	<?php $client1->buy($legume1) ; ?>
	<table class="ui celled table">
		<thead>
			<tr><th><?= $legume1->getId()?></th>
				<th><?= $legume1->getName()?></th>
				<th><?= $legume1-> getPrice()?></th>
				<th><?=(method_exists($legume1, "getBrand")) ?$legume1->getBrand():null?></th> 
				<th><?=(method_exists($legume1, "getProductorName")) ? $legume1->getProductorName():null?></th>
				<th><?=(method_exists($legume1, "ExpireAt")) ? $legume1->ExpireAt():null?></th> 
			</tr>
			
		</tr>
	</thead>


</table> 
<h3>Total du 1er client : <?= $client1->getBillAmount().' €' ?></h3>

<h1>votre second utilisateur achète un légume et un vêtement</h1>


<table class="ui celled table">
	<?php $client2->buy($legume2) ?>
	<?php $client2->buy($vetement2) ?>
	<thead>
		<tr><th><?= $legume2->getId()?></th>
			<th><?= $legume2->getName()?></th>
			<th><?= $legume2->getPrice()?></th>
			<th><?=(method_exists($legume2, "getBrand")) ?$legume2->getBrand():null?></th> 
			<th><?=(method_exists($legume2, "getProductorName")) ? $legume2->getProductorName():null?></th>
			<th><?=(method_exists($legume2, "ExpireAt")) ? $legume2->ExpireAt():null?></th> 
		</tr></thead>
	</table> 
	<table class="ui celled table">
		<thead>
			<tr><th><?= $vetement2->getId()?></th>
				<th><?= $vetement2->getName()?></th>
				<th><?= $vetement2->getPrice()?></th>
				<th><?=(method_exists($vetement2, "getBrand")) ?$vetement2->getBrand():null?></th> 
				<th><?=(method_exists($vetement2, "getProductorName")) ? $vetement2->getProductorName():null?></th>
				<th><?=(method_exists($vetement2, "ExpireAt")) ? $vetement2->ExpireAt():null?></th> 
			</tr></thead>
		</table> 
		<h3>Total du 1er client : <?= $client2->getBillAmount().' €' ?></h3>

	</body>
	</html>