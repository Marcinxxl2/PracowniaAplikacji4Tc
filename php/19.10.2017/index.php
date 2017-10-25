<!DOCTYPE html>
<html>
<head>
	<title>Zajęcia 1</title>
</head>
<body>
<?php //znacznik kanoniczny
	echo 'test';
?>

<? //znacznik typu SQML (włącz w php.ini)
	echo '';
?>
<!--
Znacznik typu asp
<%
%>
-->
<?php
	//komentarz jednoliniowy
	#komentarz unixowy
	/*
	komentarz wieloliniowy
	*/
	echo ("cudzysłów<br>");
	echo ('apostrof<br>');
	echo "tekst<br>";
	echo 'tekst<br>';
	echo 18;
	echo '<br>Masz', 18, " lat";
	echo '<h2>Nagłówek</h2>';
	echo '<h2 style="color: blue">pyk</h2>';
	
	print "test";
	
	//print "test",12 Nie działa
	
?>
</body>
</html>