<?php

require_once("config.php");

if ($connection) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $q = "INSERT INTO commenti_anonimi VALUES ($1, $2)";
    $result = pg_query_params($connection, $q, array($title, $description));

    echo $result;

    pg_close($connection);
}
