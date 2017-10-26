<?php
	$text = <<<TEKST
	ZSK - Zespół
	Szkół
	Komunikacji
TEKST;

	echo "Przed użyciem funkcji nl2br: <br>$text";
	echo "<br>Po użyciu funkcji nl2br: <br>";
	echo nl2br($text);
	echo "<br>";

	//Zamiana na małe litery
	echo strtolower($text);

	//Zamiana na duże litery

	echo "<br>";
	echo strtoupper($text);

	//W domu: Napisz funkcje która będzie zamieniać litery na duże, również duże

	//Zamiana pierwszej litery na dużą

	$tekst = 'zzz zzz';
	echo ucfirst($tekst);

	//Zamiana pierwszych liter na dużą

	echo ucwords($tekst);
	echo '<br>';
	echo '<br>';

	$lorem = 'De officia sempiternum ubi te vidisse e quamquam, cupidatat tractavissent ubi
		doctrina ubi elit a offendit o eram aut hic te quem aliquip de incididunt id
		legam expetendis ubi an consequat id deserunt nam senserit dolore ipsum ubi
		aliqua. Ea sint excepteur mentitum, ad quem coniunctione, tempor illum malis
		expetendis noster ubi enim quo iis aute ullamco. Laborum aute do cupidatat
		imitarentur, non ea aute expetendis ita non tamen exercitation qui magna nescius
		te fidelissimae de ut officia praesentibus, magna ab mentitum ex quorum, enim
		hic incurreret, doctrina cohaerescant ea ullamco. Quis praetermissum possumus
		tamen mentitum. Nulla vidisse o eruditionem, noster quo offendit, ubi quis
		quamquam, offendit lorem singulis vidisse. Esse sed consequat, ab ubi quis
		nostrud.';

	$kolumna = wordwrap($lorem, 30, '<br>');
	echo $kolumna;

	//Usuwanie białych znaków

	$auto = '  audi ';
	$auto1 = 'audi';

	echo count($auto); //1
	echo strlen($auto); //7
	echo strlen($auto1); //4

	echo strlen(ltrim($auto)); //5
	echo strlen(rtrim($auto)); //6
	echo strlen(trim($auto)); //4

	//przeszukiwanie ciągu
	$adres = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';

	//$szukaj = strstr($adres, 'tel'); Po 'tel' wypisze
	//$szukaj = strstr($adres, 'tel', true); Przed tel wypisze
	//$szukaj = strstr($adres, 'TEL', true); Nic nie wyświetla
	$szukaj = stristr($adres, 'TEL', true); //Wyświetla
	echo '<br>'.$szukaj;

	$ciag1 = 'a';
	$ciag2 = 'aa';

	echo strcmp($ciag1, $ciag2); //-1
	echo strcmp('zzz', 'zzz'); //0
	echo strcmp('zzq', 'zzz'); //-1
	echo strcmp('zzzq', 'zzz'); //1

//*******************************************************************************************

	$tekst1 = 'abcdabcdabcd';
	$tekst2 = 'ab';
	echo '<br><br>';

	if (!strpos($tekst1, $tekst2)) {
		echo "Ciąg $tekst2 nie został znaleziony w ciągu $tekst1";
	} else {
		echo "Ciąg $tekst2 został znaleziony w ciągu $tekst1";
	}



?>
