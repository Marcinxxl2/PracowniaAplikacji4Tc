<?php

	//data
	echo date("Y-m-d"), '<br>'; //2017-11-02
	echo date("Y-M-D"), '<br>'; //2017-Nov-Thu
	echo date("Y-F-D"), '<br>'; //2017-November-Thu

	//czas
	echo date('G:i:s'), '<br>'; //8:30:41
	echo date('H:i:s'), '<br>'; //8:30:41

	//dzień tygodnia
	$dzienTygodnia = date('w');
	echo $dzienTygodnia, '<br>'; //4

	switch ($dzienTygodnia) {
		case 0:
			$dzienTygodnia = 'niedziela';
			break;
		case 1:
			$dzienTygodnia = 'poniedziałek';
			break;
		case 2:
			$dzienTygodnia = 'wtorek';
			break;
		case 3:
			$dzienTygodnia = 'środa';
			break;
		case 4:
			$dzienTygodnia = 'czwartek';
			break;
		case 5:
			$dzienTygodnia = 'piątek';
			break;
		case 6:
			$dzienTygodnia = 'sobota';
			break;
	}

	echo $dzienTygodnia, '<br>'; //czwartek

	echo date('W'), '<br>'; //44 tydzień roku, liczy od jeden

	echo (date('z') + 1), '<br>'; //306 dzień roku, liczy od zera

	//*************************************************************************************
	//getdate

	$data = getdate();

	foreach ($data as $klucz => $x) {
		echo "$klucz:$x <br>";
	}

	//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
	//W domu: Wyświetl na ekranie date i czas w następującym formacie: 02 listopad 2017 r. | Godzina: 08:54:11 | Czwartek | Rok 2017 ma: 365 dni
	//W domu 2: Dodaj dwa kalendarze w formularzu na stronie

	//*************************************************************************************
	//Znacznik czasu

	$r1 = 2017;
	$m1 = 11;
	$d1 = 2;

	$r2 = 1998;
	$m2 = 10;
	$d2 = 9;

	//godzina, minuta, sekunda, miesiąc, dzień, rok

	$czas1 = mktime(0, 0, 0, $m1, $d1, $r1);
	$czas2 = mktime(0, 0, 0, $m2, $d2, $r2);

	$czas = $czas1 - $czas2;

	$dni = floor($czas / 86400); //60*60*24
	$lata = floor($dni / 365.25);

	echo 'Sekundy: ', $czas, ' Dni: ', $dni, ' Lata: ', $lata, '<br>';

	echo $czas1, '<br>'; //1509577200
	echo $czas2, '<br>'; //907884000

	//**************************************************************************************
	//strtotime()

	$data = mktime();
	$dataDzisiejsza = strtotime('now');
	echo $dataDzisiejsza, '<br>';

	echo $zaTydzien = strtotime('next week'), '<br>'; //1509956668
	echo $jutro = strtotime('tomorrow'), '<br>'; //1509663600
	echo $przyszlosc = strtotime('+10 day'), '<br><br><br>';
	echo '<h3>Zadanie domowe:</h3>';

	$miesiace = array('Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
	$dniTygodnia = array('Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela');
	$dzien = date('d');
	if (date('d') < 10) {
		$dzien = ' '.$dzien;
	}
	$miesiac = $miesiace[(date('m') - 1)];
	$rok = date('Y');
	$dzienTygodnia = $dniTygodnia[(date('N') - 1)];
	$iloscDniWRoku = date('L') + 365;
	$godzina = date('H:i:s');

	//Wynik
	echo '<h2>'.$dzien.' '.$miesiac.' '.$rok.' r. | Godzina: '.$godzina.' | Rok '.$rok.' ma: '.$iloscDniWRoku.' dni</h2>';



?>
