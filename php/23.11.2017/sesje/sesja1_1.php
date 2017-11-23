<?php
    session_start();

    if (isset($_GET['usunSesje'])) {
        session_destroy();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sesja1_1</title>
    </head>
    <body>
        Witaj <?php echo $_SESSION['imie'] ?> na drugiej stronie! <br>
        Identyfikatorem sesji jest: <?php echo session_id() ?> <br>
        <a href="sesja1.php">Pierwsza strona</a>
        <a href="sesja1_1.php?usunSesje">Usuń sesje</a>
    </body>
</html>
