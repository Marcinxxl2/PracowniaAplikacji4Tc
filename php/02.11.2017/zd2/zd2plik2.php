<?php
    session_start();
    $_SESSION['zarobki'] = array();

    foreach ($_POST as $key => $value) {
        $_SESSION['zarobki'][$key] = floatval($value);
    }

    $_SESSION['zarobki']['czas_wpisu'] = date('d/m/Y').' '.date('H:i:s');
    header('Location: zd2plik3.php');
?>