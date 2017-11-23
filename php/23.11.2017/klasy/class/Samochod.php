<?php

    class Samochod {
        public $marka, $model, $produkcja;

        function __construct($panstwo) {
            $this->produkcja = $panstwo;
        }

        public function ustawMarke ($wartosc) {
            $this->marka = $wartosc;
        }

        public function pobierzMarke () {
            return $this->model;
        }

        public function wyswietl() {
            echo <<<TEST
            Marka: $this->marka<br>
            Model: $this->model<br>
            Produkcja: $this->produkcja<br>
TEST;
        }

        public function wyswietlForeach() {
            echo '<ul>';
            foreach ($this as $klucz => $wartosc) {
                echo "<li> $klucz: $wartosc </li>";
            }
            echo '</ul>';
        }

    }

?>
