<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i foldery - tworzenie</title>
</head>
<body>
	<form>
	
		<input type="text" name="folder">
		<input type="submit">
	</form>
	<?php
		
		$dir = './test';
		if (isset($_GET['folder']) && !empty($_GET['folder'])) {
			$folder = $_GET['folder'];	
			if (!file_exists("./test/$folder")) {
				mkdir($dir.'/'.$folder); //Tworzenie folderu
			} else {
				echo '<script>alert("Folder już istnieje");</script>';
			}
		}
	
		if (isset($_GET['usunP']) && !empty($_GET['usunP'])) {
			$plik = $_GET['usunP'];	
			if (file_exists("./test/$plik")) {
				unlink($dir.'/'.$plik); //Usuwanie pliku
			} 
		}
	
		if (isset($_GET['usunK']) && !empty($_GET['usunK'])) {
			$folder = $_GET['usunK'];	
			if (file_exists("./test/$folder")) {
				rmdir($dir.'/'.$folder); //Usuwanie folderu
			} 
		}
		
		
	
		if (!($folder = opendir($dir))) { //Sprawdza czy udało się otworzyć folder
			exit ('Nie można otworzyć folderu');
		} else {
	
			$sortuj = 0;
            if (isset($_GET['sortuj'])) {
                $sortuj = $_GET['sortuj'];
            }
			
			$pliki = array();
			$katalogi = array();
			
			$dane = scandir($dir, $sortuj); //Wczytuje zawartość folderu
			
			foreach ($dane as $wartosc) {
				if ($wartosc != '.' && $wartosc != '..') {
					if (is_file($dir.'/'.$wartosc)) {
						$pliki[] = $wartosc;
					} else {
						$katalogi[] = $wartosc;
					}
				}
			}
			closedir($folder);
			
			echo 'Pliki: ';
			echo '<ul>';
			foreach ($pliki as $wartosc) {
				echo "<li>$wartosc<a href=\"3_tworzenie_katalogow.php?usunP=$wartosc\">Usuń</a></li>";
			}
			echo '</ul>';
			echo 'Foldery: ';
			echo '<ul>';
			foreach ($katalogi as $wartosc) {
				echo "<li>$wartosc <a href=\"3_tworzenie_katalogow.php?usunK=$wartosc\">Usuń</a></li>";
			}
			echo '</ul>';
			
		}
	
	?>
	
	<a href="tworzenie_katalogow.php?sortuj=0">Sortuj malejąco</a><br>
    <a href="tworzenie_katalogow.php?sortuj=1">Sortuj rosnąco</a><br>
</body>
</html>
