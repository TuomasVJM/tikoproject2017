<!DOCTYPE html>

<?php

    session_start();

    if (isset($_POST['page1'])) {
        session_destroy();
        header('Location: page2.php');
    }

?>

<html lang="fi">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>TIKO 2017 Project Work</title>
    </head>
    <body>
    </body>
</html>
