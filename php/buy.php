<?php
require_once("config.php");
if ($connection) {
    session_start();
    $email = $_SESSION["email"];
    $q = "SELECT * FROM user_shopping_cart WHERE email=$1";
    $result = pg_query_params($connection, $q, array($email));

    $acquisti = pg_fetch_all($result);

    if ($acquisti == null) {
        echo "<div align=\"center\" style=\"margin-top:250px; background-color:black; padding-top:50px; padding-bottom:50px\">" .
            "<h1 style=\"color:white\"> Non hai elementi nel carrello </h1>" .
            "</div>";
    } else {
        $arrLen = count($acquisti);

        for ($i = 0; $i < $arrLen; $i++) {
            $isbn = $acquisti[$i]['isbn'];
            $prezzo = $acquisti[$i]['price'];

            $q2 = "INSERT INTO user_purchases VALUES ($1,$2,$3)";
            $result2 = pg_query_params($connection, $q2, array($email, $isbn, $prezzo));
        }
        $q3 = "DELETE FROM user_shopping_cart WHERE email=$1";
        $result3 = pg_query_params($connection, $q3, array($email));

        header("Location: ../welcome.php");
    }
    pg_close($connection);
} else {
    echo "Internal Server Error";
}
