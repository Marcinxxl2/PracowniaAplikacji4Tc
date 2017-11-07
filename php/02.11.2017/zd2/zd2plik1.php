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
    <h1>Podaj ile zarobiłeś w danym miesiącu</h1>
    <form action="zd2plik2.php" method="post">
        Styczeń: <input type="text" name="styczen"><br>
        Luty: <input type="text" name="luty"><br>
        Marzec: <input type="text" name="marzec"><br>
        Kwiecień: <input type="text" name="kwiecien"><br>
        Maj: <input type="text" name="maj"><br>
        Czerwiec: <input type="text" name="czerwiec"><br>
        Lipiec: <input type="text" name="lipiec"><br>
        Sierpień: <input type="text" name="sierpien"><br>
        Wrzesień: <input type="text" name="wrzesien"><br>
        Październik: <input type="text" name="pazdziernik"><br>
        Listopad: <input type="text" name="listopad"><br>
        Grudzień: <input type="text" name="grudzien"><br><br>
        <input type="submit">
    </form>
</body>
</html>