<?php
$users = require('users.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>User Table</title>
</head>
<body>
	<h1>Mon jolie Tableau</h1>
	<table>
		<tr>
			<td>ID</td>
			<td>Email</td>
			<td>Created at</td>
		</tr>
		<tr><?php foreach ($users as $value) { ?>
			<tr>
				<td><?= $value->getEmail(); ?></td>
				<td><?=$value->getId();?></td>
				<td><?=$value->getCreatedAt();?></td>
			</tr>
			
		</tr>
		<?php } ?></tr>
	</table>
</body>
</html>