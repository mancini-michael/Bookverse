<?php
require_once("config.php");
if ($connection) {
    session_start();
    $email = $_SESSION["email"];

    $nome_libro = $_POST["title"];
    $descrizione = $_POST["description"];

    if (!$nome_libro || $descrizione === "") {
        header("Location: ../contacts.php?send=wrong");
        exit;
    }

    $q = "INSERT INTO commenti_utente VALUES ($1, $2, $3)";
    $result = pg_query_params($connection, $q, array($email, $nome_libro, $descrizione));

    pg_close($connection);

    header("Location: ../welcome.php?comments=wrong");
} else {
    echo "Internal Server Error";
}
