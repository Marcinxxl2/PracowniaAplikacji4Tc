<?php
	//operatory
	//+, -, /, %, *, **

	$potegowanie = 2 ** 4;
	echo "$potegowanie<br>";
	$modulo = 11 % 3;
	echo "$modulo<br>";
	
	//operatory bitowe
	
	//and &, or |, not ~, xor ^, przesunięcie bitowe w lewo <<, przesunięcie bitowe w prawo >> 

	$dziesiec = 0b1010;
	$nowa = $dziesiec << 2; //40
	echo "<br>$nowa<br>";

	$x = 0b111;
	$x = $x >> 1;
	echo "<br>$x<br>"; // 3

	//operatory logiczne

	//and, or, xor, !, &&, ||

	//Zadanie 1 - Sprawdź cz w sklepie kupisz sok
	
	$otwarty = true;
	$czyMamPieniadze = true;
	$czyJestSok = true;
	$czySaBanany = true;
	
	if ($otwarty && $czyMamPieniadze && $czyJestSok && !$czySaBanany) {
		echo "Kupiłeś sok";
	} else if ($otwarty && $czyMamPieniadze && !$czyJestSok && $czySaBanany) {
		echo "Kupiłeś banany";
	} else if ($otwarty && $czyMamPieniadze && ($czyJestSok xor $czySaBanany)) {
		echo "Kupiłeś sok lub banany";
	} else if ($otwarty && $czyMamPieniadze && $czyJestSok && $czySaBanany) {
		echo "Kupiłeś sok i banany";
	} else {
		echo "Nic nie kupiłeś";
	}
		
	//W domu
	//Sprawdź i wyświetl co kupił użytkownik w sklepie
		
	//*****************************************************************************
		
	$a = 1;
	$b = '1';
		
	if ($a == $b) {
		echo '<br>$a i $b jest równe';
	} else {
		echo '<br>$a i $b jest różne';
	}
	
	if ($a === $b) {
		echo '<br>$a i $b jest równe';
	} else {
		echo '<br>$a i $b jest różne';
	}

	//******************************************************************************

	$x = 2;
	echo $x; //2
	echo ++$x; //3, bo preinkrementacja
	echo $x; //3 
	$y = $x++; //y ma 3, bo postinktementacja
	echo $y; //3
	$y = ++$x; //y ma 5 
	echo $y; //5
	echo ++$y; //6

	//kontrola typu zmiennych
		
	$tekst = 'szkola';
	$x = 10;
	$a = 20.5;
	$y = true;
	$z = null;
	$w;

	echo gettype($tekst), '<br>'; //string
	echo gettype($x), '<br>'; //intiger
	echo gettype($a), '<br>'; //double
	echo gettype($y), '<br>'; //boolean
	echo gettype($z), '<br>'; //NULL
	echo gettype($w), '<br>'; //undifinded NULL
	echo "<br>";

	echo is_string($tekst), '<br>'; //1
	echo is_string($x), '<br>'; //
	echo is_bool($y), '<br>'; //1
	echo is_float($a), '<br>'; //1
	echo is_int($x), '<br>'; //1
	echo is_null($z), '<br>'; //1
	echo is_null($w), '<br>'; //1

	//*******************************************************************************

	//zmienne superglobalne
	
	//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION

	echo $_SERVER['SERVER_PORT'], '<br>';
	echo $_SERVER['SCRIPT_NAME'], '<br>';
	echo $_SERVER['DOCUMENT_ROOT'], '<br>';
	echo $_SERVER['SERVER_PROTOCOL'], '<br>';

	//*******************************************************************************
	
	//stałe
	//nazwy z dużych liter

	define('NAZWISKO', 'Nowak');
	echo NAZWISKO, '<br>';
	//NAZWISKO = "Kowalski" Błąd

	define('WIEK', 18, true);
	echo wiek, '<br>'; //Teraz działa z małych liter

	define('PI', 3.14159265359);
	echo PI, '<br>';

	//stałe predefiniowane

	echo PHP_VERSION; //7.1.9
	echo __LINE__, '<br>'; //158;
	echo __FILE__, '<br>'; //Ścieżka aktualnego pliku
	echo __DIR__, '<br>'; //Skład folderu

	//******************************************************************************

	//operator konwertowanie (rzutowanie) typów

	$x = 5.9;
	$y = 10.9;
	$z = 2;
	$j = -1;
	$c = 100;
	$text = 'wakacje';
	$x = (int)$x; //5
	echo $x, '<br>';

	$y = (float)$y;
	echo gettype($y); //float

	echo $c;
	$c = (unset)$c;
	echo $c;
	echo gettype($c); //NULL

	$text = (int)$text;
	echo $text; //0

	//(string), (array), (object)



	
	
	

	
	
	
	
	
	
	
	
?>