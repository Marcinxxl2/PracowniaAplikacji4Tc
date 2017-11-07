<?php
    session_start();
    $miesiace = array('styczen', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwiec', 'lipiec', 'sierpien', 'wrzesien', 'pazdziernik', 'listopad', 'grudzien');
    if ($_POST['wybor'] == 1) {
        $suma = 0;
        for ($i = 0; $i<=11; $i++) {
            $suma += $_SESSION['zarobki'][$miesiace[$i]];
        }
        $_SESSION['wynik'] = '<h2>Średnie zarobki z 12 miesięcy to: '.($suma / 12).'</h2>';
    }
    if ($_POST['wybor'] == 2) {
        $suma = 0;
        for ($i = 9; $i<=11; $i++) {
            $suma += $_SESSION['zarobki'][$miesiace[$i]];
        }
        $_SESSION['wynik'] = '<h2>Średnie zarobki z 3 ostatnich miesięcy to: '.($suma / 3).'</h2>';
    }
    if ($_POST['wybor'] == 3) {
        $suma = 0;
        $od = floatval($_POST['od']);
        $do = floatval($_POST['do']);
        $iloscMiesiecy = ($do - $od) + 1;
        for ($i = $od; $i <= $do; $i++) {
            $suma += $_SESSION['zarobki'][$miesiace[$i]];
        }
        $_SESSION['wynik'] = '<h2>Średnie zarobki z wybranych miesięcy to: '.($suma / $iloscMiesiecy).'</h2>';
    }
    header('Location: zd2plik3.php');
?>