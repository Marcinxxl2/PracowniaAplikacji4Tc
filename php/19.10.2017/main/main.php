<!DOCTYPE html>
<html>
<head>
	<title>Zajęcia 1</title>
</head>
<body>
<?php 
	echo '<h2 style="text-align: center">';
	echo 'witamy';
	echo '</h2>';
	//include '../imie.php'; 
	//@include '../imie.php'; nie wyświetli worning
	//require '../imie1.php'; fatalny błąd
	echo '<br>test<br>';
	include '../skrypt/nazwisko.php';
?>
</body>
</html>