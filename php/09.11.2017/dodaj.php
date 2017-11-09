<?php

	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		header('Location: delete.php');
		exit();
	}

	$polaczenie = new mysqli('localhost', 'root', '', 'przychodniatc');

	print_r($_POST);

	if (!$polaczenie->connect_error) {

		$polaczenie->set_charset('utf8');
		$_POST['imie'] = $polaczenie->real_escape_string(htmlentities($_POST['imie']));
		$_POST['nazwisko'] = $polaczenie->real_escape_string(htmlentities($_POST['nazwisko']));
		$_POST['choroby_przewlekle'] = $polaczenie->real_escape_string(htmlentities($_POST['choroby_przewlekle']));
		$_POST['uczulenia'] = $polaczenie->real_escape_string(htmlentities($_POST['uczulenia']));
		$_POST['choroba'] = $polaczenie->real_escape_string(htmlentities($_POST['choroba']));
		$_POST['leki_przepisane'] = $polaczenie->real_escape_string(htmlentities($_POST['leki_przepisane']));

		if ($stmt = $polaczenie->prepare('INSERT INTO pacjenci VALUES (Null, ?, ?, ?, ?, ?, ?, Null)')) {

			$stmt->bind_param('ssssss', $_POST['imie'], $_POST['nazwisko'], $_POST['choroby_przewlekle'], $_POST['uczulenia'], $_POST['choroba'], $_POST['leki_przepisane']);
			$stmt->execute();
			$stmt->close();

			$polaczenie->close();
			header('Location: delete.php');
		} else {
			$polaczenie->close();
			echo 'Błąd zapytania';
		}




	} else {
		echo 'Błąd połączenia';
	}

?>
