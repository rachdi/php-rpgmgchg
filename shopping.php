<?php

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>shopping</title>
</head>
<body>
	<form action="validateOrder.php" method="post">
		
		<h1>Choisissez un de vos Clients</h1>
		<select name="client" id="client">
			<option  value="client1">Client1</option>
			<option value="client2">Client2</option>

		</select>
		<h1>Choisissez un Produit</h1>
		<select name="produit" id="produit">
			<option  value="tomate">tomate</option>
			<option value="piment">piment</option>
			<option value="tricot">Tricot</option>

		</select><br>
		<input type="submit" value="Envoyer la commande">




	</form>
	

</body>
</html>