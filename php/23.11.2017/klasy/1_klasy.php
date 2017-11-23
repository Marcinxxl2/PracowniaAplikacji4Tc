<?php
    class Uzytkownik {
        public $imie, $nazwisko;

        public function ustawImie($wartosc) {
            $this->imie = $wartosc;
        }

        public function pobierzImie() {
            return $this->imie;
        }

        public function ustawNazwisko($wartosc) {
            $this->nazwisko = $wartosc;
        }

        public function pobierzNazwisko() {
            return $this->nazwisko;
        }
    }

    $uczen1 = new Uzytkownik();
    $uczen2 = new Uzytkownik();

    $uczen1->imie = "Janusz";
    $uczen1->nazwisko = "Nowak";

    $uczen2->ustawImie('Janusz');
    $uczen2->ustawNazwisko('Nowak');

    echo $uczen1->imie.'<br>';
    echo $uczen1->nazwisko.'<br>';

    echo $uczen2->pobierzImie().'<br>';
    echo $uczen2->pobierzNazwisko().'<br>';






?>
