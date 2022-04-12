<?php

    $connection = pg_connect("host=localhost port=5432 dbname=bookverse user=postgres password=admin") or die("Errore nella connessione" . pg_last_error());
    $email = $_POST["email"];
    $description = $_POST["description"];
    $query = "INSERT INTO comments VALUES ($1, $2)";
    $result = pg_query_params($connection, $query, array($email, $description));
    if(!$result) {
        die("Errore nell'invio: " . pg_last_error());
    }
    header("Location: ../pages/index.html");

?>