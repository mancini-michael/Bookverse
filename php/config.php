<?php

<<<<<<< HEAD
require_once ("environment.php");
=======
require_once("environment.php");
>>>>>>> 889d0133259385552248e4feaf83caf3b155a991

define("host", "localhost");
define("port", "5432");
define("dbname", $_ENV["DB_NAME"]);
define("user", "postgres");
define("password", $_ENV["DB_PASSWORD"]);

$connection_string = "host=" . host . " port=" . port . " dbname=" . dbname . " user=" . user . " password=" . password;
$connection = pg_connect($connection_string);

if (!$connection) {
    echo $connection;
}

?>