<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/index.css" />
</head>

<body>
    <?php
    require_once("config.php");
    if ($connection) {
        session_start();
        $email = $_SESSION["email"];

        $q = "SELECT * FROM user_shopping_cart WHERE email=$1";
        $result = pg_query_params($connection, $q, array($email));

        $libri = pg_fetch_all($result);

        if ($libri == null) {
            echo "<div align=\"center\" style=\"margin-top:250px; background-color:black; padding-top:50px; padding-bottom:50px\">" .
                "<h1 style=\"color:white\"> Non hai aggiunto elementi al carrello </h1>" .
                "</div>";
        } else {
            $arrLen = count($libri);

            for ($i = 0; $i < $arrLen; $i++) {
                $isbn = $libri[$i]['isbn'];
                $prezzo = $libri[$i]['prezzo'];
                echo "<h1>isbn: </h1>" .  "$isbn" . " <h1>prezzo: </h1> " .  "$prezzo<hr />";
            }
        }

        pg_close($connection);
    } else {
        echo "Internal Server Error";
    }
    ?>
    <form id="finalizzaAcquisto" method='post' action='../php/compra.php'>
        <button type="submit" class="btn btn-primary"><a>Procedi All'acquisto</button>
    </form>
</body>

</html>