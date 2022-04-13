<?php

define("host", "localhost");
define("port", "5432");
define("dbname", "bookverse");
define("user", "postgres");
define("password", "admin");

$connection_string = "host=" . host . " port=" . port . " dbname=" . dbname . " user=" . user . " password=" . password;
$connection = pg_connect($connection_string);

if (!$connection) {
    die("ERRORE: connessione al database non riuscita");
}
