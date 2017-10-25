<?php

	$liczba = 10;
	$_liczba = 15;
	$liczba = 2;
	$imie_ = 'Janusz';
	$Imie_ = 'Anna';
	$wartość = 12;
	$👍 = 'ok';
	$👌 = 'dobrze';

	echo $👍;
	echo $👌;

	//typ boolean
	$prawda = true;

	//typ integer
	$calkowita = 200;
	$osemkowa = 021;
	$szesnastkowa = 0x21;
	$binarna = 0b1010;
	echo "zmienna: $osemkowa";
	echo "zmienna: $szesnastkowa";
	echo "zmienna: $binarna";

	//typ float
		
	$zmienna = 5.7;
	
	//typ string


	$cyfra = 1;
	echo "tekst: $cyfra";
	echo 'tekst: $cyfra';


	//skladnia heredoc

	$wiek = 20;
	$imie = <<<ETYKIETA
	<br>Janusz ma $wiek lat<br>
	I mieszka w Poznaniu
ETYKIETA;

	echo $imie;

	//nowdoc
	$x = '1';
	$tekst = <<<'TEKST'
	Anna i $x
TEKST;

	echo "$tekst<br>";

	$z = 'Poznań';
	echo <<<TEST
	<h1>Miejsce urodzenia: $z</h1>
TEST;

	$inna = null;
	$inna2 = NULL;
	
		
	

?>