<?php
	$kolory = array("biały", "zielony", "czerwony");

	echo "Początkowa zawartość tablicy: <br>";

	for ($i = 0; $i < count($kolory); $i++) {
		$element = $i + 1;
		echo "Element $element: $kolory[$i]<br>";
	}

	$kolory[0] = 'orange';
	$kolory[1] = 'aqua';
	$kolory[2] = 'magenta';

	function wypisz($tablica) {
		for ($i = 0; $i < count($tablica); $i++) {
			$element = $i + 1;
			echo "Element $element: $tablica[$i]<br>";
		}
	}

	wypisz($kolory);

//****************************************************************************************

	//Tablice asocjacyjne

	$dane = array(
		"imie" => "Janusz",
		"nazwisko" => "Nowak",
		"wiek" => 20,
		"narodowosc" => "Polska"
	);
	//Imię: {$dane['imie']}<br>
	echo 'Zawartość tablicy $dane: <br>';

	echo <<<TAB
	Imię: $dane[imie]<br>
TAB;

	//foreach

	foreach ($dane as $wartosc) {
		echo "Wartość: $wartosc<br>";
	}

	foreach ($dane as $klucz => $wartosc) {
		echo "Wartość $klucz: $wartosc<br>";
	}

//******************************************************************************************

	$uczen = array(
		array('Julia', 'Nowak', 20),
		array('Anna', 'Kowal', 19),
		array('Paweł', 'Kowalski', 25)
	);

	for ($i=0; $i<count($uczen); $i++) {
		for ($j=0; $j<count($uczen[$i]); $j++) {
			echo $uczen[$i][$j]." ";
		}
		echo '<br>';
	}
	echo '<br>';

	foreach ($uczen as $klucz => $tablica) {
		foreach ($tablica as $klucz2 => $wartosc) {
			echo $wartosc.' ';
		}
		echo '<br>';
	}

	//Funkcja wyswitlająca tablicę wielowymiarową

	function wyswietlTabDwu($tabAsoc) {
		foreach ($tabAsoc as $tablicaWewnetrzna) {
			foreach ($tablicaWewnetrzna as $wartosc) {
				echo $wartosc.' ';
			}
		}
	}

	//W domu: utwórz tablice 3 wymiarową i utwórz funkcje ją wyświetlającą

	//Sortowanie

	$tab = array(10, 1, 5, 75, -4, 100);

	function wypisz1($tablica){
		foreach ($tablica as $wartosc) {
			echo $wartosc.' ';
		}
	}

	wypisz1($tab);


	//Sortowanie rosnąco
	sort($tab);
	wypisz1($tab);

	//Sortowanie malejąco
	rsort($tab);
	wypisz1($tab);
	echo '<br>';

	//*******************************************************

	$tab2 = array('julia', 'anna', 'zenon', 'alicja');
	sort($tab2);
	wypisz1($tab2);
	echo '<br>';

	$tab3 = array('Julia', 'anna', 'zenon', 'alicja');
	sort($tab3);
	wypisz1($tab2);
	echo '<br>';

	foreach($tab3 as $klucz => $x) {
		$x = strtolower($x);
		$tab3[$klucz] = $x;
	}

	sort($tab3);

	$tabAsoc = array(
		"imie" => "andrzej",
		"nazwisko" => "3endru",
		"wiek" => 30,
		"nazwisko" => "kowal"
	);

	//sortowanie według klucza

	ksort($tabAsoc);
	wypisz1($tabAsoc);

	//wyświetlanie danych z tablicy
	echo '<br>';
	var_dump($tab3);
	echo '<br>';
	print_r($tab3);

	echo '<pre>';
		print_r($tab3);
	echo '</pre>';










?>
