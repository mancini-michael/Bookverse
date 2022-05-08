<?php
require_once("config.php");
if ($connection) {
    session_start();
    $email = $_SESSION["email"];
    $isbn = $_GET["isbn"];

    $q = "SELECT * FROM catalogo WHERE isbn=$1";
    $result = pg_query_params($connection, $q, array($isbn));

    $libro = pg_fetch_array($result);

    if (!$libro) {
        include("components/no-item.php");
    } else {
        $prezzo = $libro['prezzo'];

        $q = "INSERT INTO acquisti_utente VALUES ($1,$2,$3)";
        $result = pg_query_params($connection, $q, array($email, $isbn, $prezzo));

        header("Location: ../welcome.php?acquisto=wrong");
    }
    pg_close($connection);
} else {
    echo "Internal Server Error";
}
