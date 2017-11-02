<?php

	//Instrukcja if

	$x = 2;
	$y = 4;
	if ($x < $y) {
		echo 'Zmienna x jest mniejsza niż zmienna y';
	}

	if ($x < $y):
		echo '<br>Zmienna x jest mniejsza niż zmienna y<br>';
	endif;

	//Instrukcja else...if

	$a = 3;
	$b = 2;

	if ($a < $b) {
		echo 'a jest mniejsze od b<br>';
	} else {
		echo 'b jest mniejsze od a<br>';
	}

	if ($a < $b):
		echo 'a jest mniejsze od b<br>';
	else:
		echo 'b jest mniejsze od a<br>';
	endif;

	if ($a < $b) {
		echo 'Zmienna a jest mniejsza od b';
	} else if ($a == $b) {
		echo 'a jest równe b';
	} else {
		echo 'Zmienna b jest mniejsza od a';
	}

	if($a < $b):
		echo 'Zmienna a jest mniejsza od b';
	elseif ($a == $b): //Tu nie wolno 'else if'
		echo 'a jest równe b';
	else:
		echo 'Zmienna b jest mniejsza od a';
	endif;

	//Instrukcja switch

	$a = 5;

	switch($a):
		case 0:
			echo '0';
		case 5:
			echo '5';
	endswitch;

	//*******************************************************************************

	//pętla for

	for ($i = 0; $i < 10; $i++):
		echo "$i ";
	endfor;

	//pętla foreach

	$tab = array(1, 2, 3, 4, 5);

	foreach ($tab as $klucz => $x):
		echo "$klucz: $x";
	endforeach;

	echo '<br>';

	//while

	$i = 3;
	while ($i <= 10):
		echo "$i ";
		$i++;
	endwhile;

	//*******************************************************************************

	//break

	for ($i = 1; ;$i++):
		echo 'Zmienna i wynosi: $i <br>';
		if ($i == 5):
			break;
		endif;
	endfor;


?>
