<?php
require_once("config.php");
if ($connection) {
    session_start();
    $email = $_SESSION["email"];
    $q = "SELECT isbn, count(*) as num_acquisti FROM user_purchases WHERE email=$1 GROUP BY isbn";
    $result = pg_query_params($connection, $q, array($email));

    $acquisti = pg_fetch_all($result);

    if (!$acquisti) {
        echo "non hai acquistato niente";
    } else {
        $arrLen = count($acquisti);

        for ($i = 0; $i < $arrLen; $i++) {
            $isbn = $acquisti[$i]['isbn'];
            $num_acquisti = $acquisti[$i]['num_acquisti'];

            $q2 = "SELECT * FROM books_catalogue WHERE isbn=$1";
            $result2 = pg_query_params($connection, $q2, array($isbn));
            $libro = pg_fetch_all($result2);

            $titolo = $libro[0]['titolo'];
            $img = $libro[0]['img'];
            $prezzo = $libro[0]["prezzo"];
            include("components/history-item.php");
        }
    }
    pg_close($connection);
} else {
    echo "Internal Server Error";
}
