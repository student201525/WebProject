<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Main Page of Game</title>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<?php
			include('menu.php');
			echo Menu::getItem($_GET['page']);
		?>
		
		<?php
			include('content.php');
			echo Content::getPage($_GET['page']);
		?>
	</body>
</html>