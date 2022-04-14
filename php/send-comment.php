<?php

require_once("config.php");

$email = $_POST["email"];
$description = $_POST["description"];
$q = "INSERT INTO comments VALUES ($1, $2)";
$result = pg_query_params($connection, $q, array($email, $description));

if (!$result) {
    header("Location: ../views/index.php?send=errore#comment-form");
    exit;
}

header("Location: ../views/index.php?send=inviato#comment-form");

pg_close($connection);
