<?php
    class Liczby{
        public $wartosc1 = 1;
        protected $wartosc2 = 2;
        private $wartosc3 = 3;

        public function wyswietl() {
            echo "Wartość 1: $this->wartosc1".'<br>';
            echo "Wartość 2: $this->wartosc2".'<br>';
            echo "Wartość 3: $this->wartosc3".'<br>';
        }
    }

    class Rzeczywiste extends Liczby {
        public function wyswietl() {
            echo "Wartość 1: $this->wartosc1".'<br>';
            echo "Wartość 2: $this->wartosc2".'<br>';
            echo "Wartość 3: $this->wartosc3".'<br>';
        }
    }

    $liczba1 = new Liczby();
    $liczba2 = new Rzeczywiste();

    echo "Obiekt liczba1 - wartość: ".$liczba1->wartosc1;
    echo "Obiekt liczba2 - wartość: ".$liczba1->wartosc2;
    echo "Obiekt liczba3 - wartość: ".$liczba1->wartosc3;

    $liczba1->wyswietl();

?>
