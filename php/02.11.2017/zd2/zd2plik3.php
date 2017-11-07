<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formularz 1</title>
</head>
<body>
    <h2>Załadowano dane</h2>
    <h2>Co chcesz sprawdzić?</h2>
    <form action='zd2plik4.php' method="post">
        <label>Średni zarobek z całego roku: <input type="radio" name="wybor" value="1"></label><br>
        <label>Średni zarobek z ostatnich 3 miesięcy: <input type="radio" name="wybor" value="2"></label><br>
        <label>Średni zarobek od danego miesiąca do danego miesiąca: <input type="radio" name="wybor" value="3" id="oddo"></label><br>
        Od: 
        <select name="od">
            <option value='0'>Styczeń</option>
            <option value='1'>Luty</option>
            <option value='2'>Marzec</option>
            <option value='3'>Kwiecień</option>
            <option value='4'>Maj</option>
            <option value='5'>Czerwiec</option>
            <option value='6'>Lipiec</option>
            <option value='7'>Sierpień</option>
            <option value='8'>Wrzesień</option>
            <option value='9'>Październik</option>
            <option value='10'>Listopad</option>
            <option value='11'>Grudzień</option>
        </select>
        Do: 
        <select name="do">
            <option value='0'>Styczeń</option>
            <option value='1'>Luty</option>
            <option value='2'>Marzec</option>
            <option value='3'>Kwiecień</option>
            <option value='4'>Maj</option>
            <option value='5'>Czerwiec</option>
            <option value='6'>Lipiec</option>
            <option value='7'>Sierpień</option>
            <option value='8'>Wrzesień</option>
            <option value='9'>Październik</option>
            <option value='10'>Listopad</option>
            <option value='11'>Grudzień</option>
        </select>
        <br><br><input type="submit" value="Sprawdź">
        <?php
            if (isset($_SESSION['wynik'])) {
                echo $_SESSION['wynik'];
                unset($_SESSION['wynik']);
            }
        ?>
    </form>
</body>
</html>