<?php

require_once("config.php");

session_start();

if ($connection) {
    $email = $_SESSION["email"];
    $isbn = $_POST["isbn"];
    $price = str_replace("€", "", $_POST["price"]);

    $q = 'SELECT * FROM carrello_utente WHERE isbn = $1';
    $result = pg_query_params($connection, $q, array($isbn));
    $status = pg_fetch_array($result);

    if (empty($status)) {
        $q = 'INSERT INTO carrello_utente VALUES ($1, $2, $3)';
        $result = pg_query_params($connection, $q, array($email, $isbn, $price));

        if (!$result) {
            die("ERRORE: inserimento nel database non riuscito");
        }

        echo $result;
    } else {
        echo false;
    }
}
