<?php
require_once("config.php");
if ($connection) {
    session_start();
    $email = $_SESSION["email"];
    $q = "SELECT * FROM carrello_utente WHERE email=$1";
    $result = pg_query_params($connection, $q, array($email));

    $acquisti = pg_fetch_all($result);

    if (!$acquisti) {
        include("components/no-item.php");
    } else {
        $arrLen = count($acquisti);

        for ($i = 0; $i < $arrLen; $i++) {
            $isbn = $acquisti[$i]['isbn'];
            $prezzo = $acquisti[$i]['prezzo'];

            $q2 = "INSERT INTO acquisti_utente VALUES ($1,$2,$3)";
            $result2 = pg_query_params($connection, $q2, array($email, $isbn, $prezzo));
        }
        $q3 = "DELETE FROM carrello_utente WHERE email=$1";
        $result3 = pg_query_params($connection, $q3, array($email));

        header("Location: ../welcome.php");
    }
    pg_close($connection);
} else {
    echo "Internal Server Error";
}
