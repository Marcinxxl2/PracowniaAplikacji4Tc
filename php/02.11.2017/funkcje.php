<?php

	//declare(strict_types = 1);

	function wartosc($a):string {
		if ($a < 0) {
			return 'ujemna<br>';
		} elseif ($a > 0) {
			return 'dodatnia<br>';
		} else {
			return 'zero<br>';
		}
	}

	echo wartosc(10);

	$a = 1;
	$wynik = wartosc($a);
	echo $wynik, gettype($wynik), '<br>';

	function dajWartosc():int {
		return 5;
		//return 5.6 Jeśli jest strict_types = 1, to będzie błąd z 5.6
	}

	echo dajWartosc(), "<br>";

	//***********************************************************************************

	//zasięg zmiennych

	$x = 10;

	function wyswietlx() {
		echo $x; //Nie zadziała
		echo $GLOBALS['x'], "<br>"; //Zadziała
	}

	$y = 10;

	function wyswietly() {
		global $y;
		echo $y, "<br>"; //Zadziała
	}

	wyswietlx();
	wyswietly();

	//***********************************************************************************

	function suma() {
		$liczba = 1;
		echo $liczba;
		$liczba++;
	}

	suma();
	suma();

	function suma1() {
		static $liczba = 1;
		echo $liczba;
		$liczba++;
	}

	suma1();
	suma1(); //Teraz zapamięta co było w poprzednim wywołaniu funkcji

	//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
	//W domu 3: użytkownik podaje z klawiatury ilość pieniędzy jakie dostał za pracę (w formularzu). Wstaw sumy do tablicy. 
	//Stwórz tablice asocjacyjną, której kluczami będą miesiące. Suma za pracę będzie automatycznie wstawiana do tablicy w zależności od miesiąca. 
	//Wstaw również do tablicy potwierdzenie dotyczące daty, godziny, minut i sekund w jakiej użytkownik dostał pieniądze. 
	//Użytkownik może wybrać okres w jakim chce sprawdzić ile zarobił jak również średni zarobek z trzech ostatnich miesięcy oraz całego roku.

?>
