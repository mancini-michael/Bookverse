<?php
    require_once("config.php");

    if ($connection) {
        session_start();
        $email = $_SESSION["email"];
        $q = 'DELETE FROM carrello_utente WHERE email=$1';
        $result = pg_query_params($connection, $q, array($email));
        pg_close($connection);
        header ("Location: ../shopping-cart.php");
    } else {
        echo "Internal Server Error";
    }
