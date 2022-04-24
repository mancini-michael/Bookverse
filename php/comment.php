<?php
    require_once("config.php");
    if ($connection) {
        session_start();
        $email = $_SESSION["email"];
        
        $q = "SELECT * FROM comments_users WHERE email=$1";
        $result = pg_query_params($connection, $q, array($email));

        $commenti = pg_fetch_all($result);

        if ($commenti == null) {
            echo "<div align=\"center\" style=\"margin-top:250px; background-color:black; padding-top:50px; padding-bottom:50px\">" .
                    "<h1 style=\"color:white\"> Non hai inserito commenti </h1>" .
                 "</div>";
        }
        else {
            $arrLen = count($commenti);
        
            for ($i = 0; $i < $arrLen; $i++) {
                $nome_libro = $commenti[$i]['nome_libro'];
                $descrizione = $commenti[$i]['descrizione'];
                echo "<h1>Libro: </h1>" .  "$nome_libro" . " <h1>Descrizione: </h1> " .  "$descrizione<hr />";
            }
        }

        pg_close($connection);
    } else {
        echo "Internal Server Error";
    }
