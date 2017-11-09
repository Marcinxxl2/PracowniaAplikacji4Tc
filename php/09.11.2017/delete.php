<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="delete.css">
</head>
<body>
	<?php
		$polaczenie = new mysqli('localhost', 'root', '', 'przychodniatc');
		if (!$polaczenie->connect_error) {

			$polaczenie->set_charset('utf8');
			$sort = 'id';
			if (isset($_GET['sort'])) {
				$sort = $_GET['sort'];
			}
			$sql = "SELECT * FROM pacjenci ORDER BY $sort";

			echo <<<TABELA
			<table>
				<tr>
					<th><a href="delete.php?sort=id">id</a></th>
					<th><a href="delete.php?sort=imie">imie</a></th>
					<th><a href="delete.php?sort=nazwisko">nazwisko</a></th>
					<th><a href="delete.php?sort=choroby_przewlekle">choroby przewlekłe</a></th>
					<th><a href="delete.php?sort=uczulenia">uczulenia</a></th>
					<th><a href="delete.php?sort=choroba">choroba</a></th>
					<th><a href="delete.php?sort=leki_przepisane">leki przepisane</a></th>
					<th>Usuń</td>
				</tr>
TABELA;

			if ($rezultat = $polaczenie->query($sql)) {

				while ($wiersz = $rezultat->fetch_assoc()) {
					echo <<<WIERSZ
					<tr>
						<td>$wiersz[id]</td>
						<td>$wiersz[imie]</td>
						<td>$wiersz[nazwisko]</td>
						<td>$wiersz[choroby_przewlekle]</td>
						<td>$wiersz[uczulenia]</td>
						<td>$wiersz[choroba]</td>
						<td>$wiersz[leki_przepisane]</td>
						<td><a href='delete_k.php?id=$wiersz[id]'>Usuń</a></td>
					</tr>
WIERSZ;
				}

			} else {
				echo 'Błąd w zapytaniu';
			}



			echo "</table>";

		} else {
			echo 'Błąd połączenia';
		}
	$polaczenie->close();
	?>

	<br><br>
	<form action="dodaj.php" method="post">
		imie:<input type="text" name="imie"><br>
		nazwisko:<input type="text" name="nazwisko"><br>
		choroby przewlekłe:<input type="text" name="choroby_przewlekle"><br>
		uczulenia:<input type="text" name="uczulenia"><br>
		choroba:<input type="text" name="choroba"><br>
		leki przepisane:<input type="text" name="leki_przepisane"><br>
		<input type="submit">
	</form>


</body>
</html>


