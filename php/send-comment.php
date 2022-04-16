<?php

require_once("config.php");

$email = $_POST["email"];
$description = $_POST["description"];
$q = "INSERT INTO comments VALUES ($1, $2)";
$result = pg_query_params($connection, $q, array($email, $description));

echo $result;

pg_close($connection);
