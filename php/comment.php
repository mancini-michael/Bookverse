<?php
require_once("config.php");
if ($connection) {
    session_start();
    $email = $_SESSION["email"];

    $q = "SELECT * FROM commenti_utente WHERE email=$1";
    $result = pg_query_params($connection, $q, array($email));

    $commenti = pg_fetch_all($result);

    if (!$commenti) {
        include("components/no-item.php");
    } else {
        $arrLen = count($commenti);

        for ($i = 0; $i < $arrLen; $i++) {
            $nome_libro = $commenti[$i]['nome_libro'];
            $descrizione = $commenti[$i]['descrizione'];
            include("components/comment-item.php");
        }
    }

    pg_close($connection);
} else {
    echo "Internal Server Error";
}
