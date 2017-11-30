<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Otwieranie plików</title>
</head>
<body>
	
	
	
	<?php
		
		if (isset($_POST['przycisk']) && !empty($_POST['area'])) {
			$nowyTekst = $_POST['area'];
			if ($zapis = fopen('./test/matura.txt', 'wb')) {
				if (fwrite($zapis, $nowyTekst) === false) {
					echo 'Błąd zapisu';
				}
			} else {
				echo 'Nie można otworzyć pliku';
			}
		} 
	
		if ($fd = fopen('./test/matura.txt', 'rb')) {
			
			$rozmiar = filesize('./test/matura.txt');
			$tekst = fread($fd, $rozmiar);
			fclose($fd);
			
		} else {
			echo 'Nie mogę otworzyć pliku';
		}
	?>
	
	<form method="post">
		<textarea name="area"><?php echo $tekst; ?></textarea>
		<input type="submit" name="przycisk">
	</form>
	
	<?php
		echo 'Wolne miejsce: '.disk_free_space('/').'<br>'; //W bajtach
		echo 'Wolne miejsce: '.round((disk_free_space('/') / (1024 * 1024)), 2).'<br>'; //W megabajtach
		echo 'Wielkość partycji: '.round((disk_total_space('/') / (1024 * 1024)), 2).'<br>'; //W megabajtach
		
	?>
</body>
</html>
