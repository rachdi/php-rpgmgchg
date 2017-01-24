<?php 
require_once ('models/Client.php');
$client=$_POST['client'];
$produit=$_POST['produit'];



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>validationOrder</title>
</head>
<body>
	<table>
		<tr>
			<td><h1>Liste des Produits</h1></td>
			<td><h1>Prix Totale</h1></td>
		</tr>
		<tr>
			<td><?=$produit ?></td>
			<td><?= $client->getBillAmount()?></td>


		</tr>



	</table>
</body>
</html>