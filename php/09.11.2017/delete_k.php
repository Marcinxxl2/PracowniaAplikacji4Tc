<?php

	$id = $_GET['id'];
	$polaczenie = new mysqli('localhost', 'root', '', 'przychodniatc');
	if (!$polaczenie->connect_error) {

		$polaczenie->set_charset('utf8');
		$sql = "DELETE FROM pacjenci WHERE id = '$id'";

		if ($polaczenie->query($sql)) {

			$polaczenie->close();
			header('Location: delete.php');
		} else {
			echo 'Bład zapytania SQL';
		}

	} else {
		echo 'Błąd połączenia';
	}

?>
