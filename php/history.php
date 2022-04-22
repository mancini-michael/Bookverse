<?php
require_once("config.php");
if ($connection) {
    session_start();
    $email = $_SESSION["email"];
    $q = "SELECT * FROM user_purchases WHERE email=$1";
    $result = pg_query_params($connection, $q, array($email));

    $acquisti = pg_fetch_all($result);

    if (!$acquisti) {
        echo "non hai acquistato niente";
    } else {
        $arrLen = count($acquisti);

        for ($i = 0; $i < $arrLen; $i++) {
            $isbn = $acquisti[$i]['isbn'];
            $prezzo = $acquisti[$i]['prezzo'];

            $q2 = "SELECT * FROM books_catalogue WHERE isbn=$1";
            $result2 = pg_query_params($connection, $q2, array($isbn));
            $libro = pg_fetch_all($result2);

            $titolo = $libro[0]['titolo'];
            $img = $libro[0]['img'];
            include("components/partials/history-item.php");
        }
    }
    pg_close($connection);
} else {
    echo "Internal Server Error";
}
