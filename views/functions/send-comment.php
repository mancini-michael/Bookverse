<?php

$connection = pg_connect("host=localhost port=5432 dbname=loginbook user=postgres password=Zainetto01") or die("Errore nella connessione" . pg_last_error());
$email = $_POST["email"];
$description = $_POST["description"];
$query = "INSERT INTO comments VALUES ($1, $2)";
$result = pg_query_params($connection, $query, array($email, $description));
if (!$result) {
    header("Location: ../index.php?send=errore#comment-form");
} else {
    header("Location: ../index.php?send=inviato#comment-form");
}
