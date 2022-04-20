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
                
                $q2 = "SELECT * FROM books_catalogue WHERE isbn=$1";
                $result2 = pg_query_params($connection, $q2, array($isbn));
                $libro = pg_fetch_all($result2);

                $titolo = $libro[0]['titolo'];
                $img = $libro[0]['img'];
                echo "<h1>Titolo: $titolo</h1>" . "<br><img src=\"$img\" width=\"200\" height=\"300\" style=\"border:5px solid black\">" .
                    "<h1>prezzo: $prezzo</h1>" . "<br><hr /><br>";

            }
        }

        pg_close($connection);
    } else {
        echo "Internal Server Error";
    }

?>