<?php
    require_once("config.php");
    if ($connection) {
        session_start();
        $email = $_SESSION["email"];
        $q = "SELECT * FROM user_purchases WHERE email=$1";
        $result = pg_query_params($connection, $q, array($email));

        $acquisti = pg_fetch_all($result);

        if ($acquisti == null) {
            echo "<div align=\"center\" style=\"margin-top:250px; background-color:black; padding-top:50px; padding-bottom:50px\">" .
                    "<h1 style=\"color:white\"> Non hai effettuato acquisti </h1>" .
                 "</div>";
        }
        else {
            $arrLen = count($acquisti);
        
            for ($i = 0; $i < $arrLen; $i++) {
                $isbn = $acquisti[$i]['isbn'];
                $prezzo = $acquisti[$i]['prezzo'];
                echo "<h1>isbn: </h1>" .  "$isbn" . " <h1>prezzo: </h1> " .  "$prezzo<hr />";
            }
        }

        pg_close($connection);
    } else {
        echo "Internal Server Error";
    }

?>