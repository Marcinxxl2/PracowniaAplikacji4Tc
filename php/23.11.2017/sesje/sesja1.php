<?php
    session_start();
    $_SESSION['imie'] = 'Marcin';

    if (isset($_GET['usunSesje'])) {
        session_destroy();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sesja1</title>
    </head>
    <body>
        Witaj <?php echo $_SESSION['imie'] ?> na stronie! <br>
        Identyfikatorem sesji jest: <?php echo session_id() ?> <br>
        <a href="sesja1_1.php">Następna strona</a>
        <a href="sesja1.php?usunSesje">Usuń sesje</a>
    </body>
</html>
