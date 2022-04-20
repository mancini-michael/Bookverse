<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/catalog.css" />
</head>
<body>
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
        echo "<div align=\"center\"><button type=\"button\" class=\"btn btn-primary\"><a href=\"../welcome.php\" style=\"text-decoration:none; color:white\">Torna Alla HomePage</a></button></div>";
        pg_close($connection);
    } else {
        echo "Internal Server Error";
    }
    ?>
</body>
</html>
