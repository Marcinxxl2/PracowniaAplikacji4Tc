<?php
    require_once('class/Samochod.php');

    $auto1 = new Samochod('Polska');
    $auto1->marka = 'Ferrari';
    $auto1->model = 'F430';

    $auto1->wyswietl();

    $auto1->wyswietlForeach();
?>
