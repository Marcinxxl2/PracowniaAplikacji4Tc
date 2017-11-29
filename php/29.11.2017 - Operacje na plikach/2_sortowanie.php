<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i foldery - sortowanie</title>
</head>
<body>
    <?php
        $dir = "./test";
        if (!($folder = opendir($dir))) {
            exit ('Nie można otworzyć folderu');
        } else {
            $sortuj = 0;
            if (isset($_GET['sortuj'])) {
                $sortuj = $_GET['sortuj'];
            }
            $dane = scandir($dir, $sortuj);
            echo '<ul>';
            foreach($dane as $wartosc) {
                echo "<li>$wartosc</li>";
            }
            echo '</ul>';
            
        }
        closedir($folder);
        
    ?>
    <a href="2_sortowanie.php?sortuj=0">Sortuj malej?co</a><br>
    <a href="2_sortowanie.php?sortuj=1">Sortuj rosn?co</a><br>
    
</body>
</html>
