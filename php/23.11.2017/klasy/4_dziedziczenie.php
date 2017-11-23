<?php
    require_once('class/Samochod.php');

    class Ciezarowy extends Samochod {
        public $ladownosc;

        public function wyswietl() {
            parent::wyswietl(); //Wywoła funkcje rodzica
            echo 'Ładowność: '.$this->ladownosc;
        }
    }

    $tir1 = new Ciezarowy('Polska');
    $tir1->ladownosc = 19000;
    $tir1->marka = "DAF";
    $tir1->model = 'XF 95 480';

    $tir1->wyswietlForeach();
    $tir1->wyswietl();
?>
