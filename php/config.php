<?php

define("host", "localhost");
define("port", "5432");
define("dbname", "...");
define("user", "postgres");
define("password", "...");

$connection_string = "host=" . host . " port=" . port . " dbname=" . dbname . " user=" . user . " password=" . password;
$connection = pg_connect($connection_string);

if (!$connection) {
    echo $connection;
}
