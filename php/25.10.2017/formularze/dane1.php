<?php
	/*session_start();
	$imie = $_GET['imie'];
	$nazwisko = $_GET['nazwisko'];

	if (empty($imie) || empty($nazwisko)) {
		$_SESSION['komunikat'] = 'Uzupełnij dane';
		header('Location:  form1.php');
	} else {
		echo 'Imię: <span style="color: blue">'.$imie.'</span><br> Nazwisko: <span style="color: red">'.$nazwisko.'</span>';
	}*/

	if (isset($_POST['kolor'])) {
		echo 'Zaznaczyłeś wartość: '.$_POST['kolor'];
	} else {
		//echo 'Zaznacz jedną z opcji';
		header('Location: form1.php');
	}
?>