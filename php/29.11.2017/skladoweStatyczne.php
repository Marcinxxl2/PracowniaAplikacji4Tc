<?php
    class Liczby {
        public static $liczba = 10;
        public static function wyswietl () {
            echo 'Wartość statycznego pola wynosi: '.Liczby::$liczba.'<br>';
        }
    }

    echo Liczby::$liczba.'<br>';
    echo Liczby::wyswietl();

    Liczby::$liczba = 200;

    echo Liczby::$liczba.'<br>';

?>
