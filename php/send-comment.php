<?php

require_once("config.php");

$email = $_POST["email"];
$description = $_POST["description"];
$query = "INSERT INTO comments VALUES ($1, $2)";
$result = pg_query_params($connection, $query, array($email, $description));

if (!$result) {
    header("Location: ../views/index.php?send=errore#comment-form");
    exit;
}

header("Location: ../views/index.php?send=inviato#comment-form");
