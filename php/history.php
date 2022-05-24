<?php
require_once("config.php");
if ($connection) {
    session_start();
    $email = $_SESSION["email"];
    $q = "SELECT isbn, count(*) as num_acquisti, sum(prezzo) as totale_speso FROM acquisti_utente WHERE email=$1 GROUP BY isbn";
    $result = pg_query_params($connection, $q, array($email));

    $acquisti = pg_fetch_all($result);

    if (!$acquisti) {
        include("components/no-item.php");
    } else {
        $arrLen = count($acquisti);

        for ($i = 0; $i < $arrLen; $i++) {
            $isbn = $acquisti[$i]['isbn'];
            $num_acquisti = $acquisti[$i]['num_acquisti'];
            $totale_speso = $acquisti[$i]['totale_speso'];

            $q2 = "SELECT * FROM catalogo WHERE isbn=$1";
            $result2 = pg_query_params($connection, $q2, array($isbn));
            $libro = pg_fetch_all($result2);

            $titolo = $libro[0]['titolo'];
            $img = $libro[0]['copertina'];
            $prezzo = $libro[0]["prezzo"];
            include("components/history-item.php");
        }
    }
    pg_close($connection);
} else {
    echo "Internal Server Error";
}
