<?php

require_once("./functions/config.php");

$email = $_POST["email"];
$description = $_POST["description"];
$query = "INSERT INTO comments VALUES ($1, $2)";
$result = pg_query_params($connection, $query, array($email, $description));

if (!$result) {
    header("Location: ../index.php?send=errore#comment-form");
    exit;
}

header("Location: ../index.php?send=inviato#comment-form");
