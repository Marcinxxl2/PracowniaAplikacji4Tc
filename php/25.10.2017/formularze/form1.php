<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formularz 1</title>
</head>
<body>
	<!--<form method="GET" action="dane1.php">
		<input type="text" name="imie">Imię<br>
		<input type="text" name="nazwisko">Nazwisko<br>
		<input type="submit">
	</form>-->
	<!--<form method="post" action="dane1.php">
		<input type="radio" name="kolor" value="biały">Biały<br>
		<input type="radio" name="kolor" value="zielony">Zielony<br>
		<input type="radio" name="kolor" value="czerwony">Czerwony<br>
		
		<input type="submit">
	</form>-->
	
	<!--<form method="post">
		<input type="radio" name="kolor" value="biały">Biały<br>
		<input type="radio" name="kolor" value="zielony">Zielony<br>
		<input type="radio" name="kolor" value="czerwony">Czerwony<br>
		
		<input type="submit">
	</form>-->
	
	<form method="POST">
		<input type="text" name="Login">Login<br>
		<input type="text" name="Haslo">Nazwisko<br>
		<input type="submit">
	</form>
	
	<!--W domu: sprawdź czy login ma wartośc Janusz, a hasło czy ma wartość Okoń-->
	
	<?php 
		if ($_SERVER["REQUEST_METHOD"] == 'POST') {
			if (!empty($_POST["Login"]) && !empty($_POST["Haslo"])) {
				if ($_POST["Login"] == 'Janusz' && $_POST["Haslo"] == 'Okoń') {
					echo 'Poprawne dane';
				} else {
					echo 'Niepoprawne dane';
				} 
			} else {
				echo 'Wypełnij pola';
			}
		}
		
	?>
	
</body>
</html>