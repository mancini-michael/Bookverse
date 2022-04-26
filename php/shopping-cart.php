 <?php
    require_once("config.php");

    if ($connection) {
        session_start();
        $email = $_SESSION["email"];

        $q = "SELECT * FROM user_shopping_cart WHERE email=$1";
        $result = pg_query_params($connection, $q, array($email));

        $libri = pg_fetch_all($result);

        if (empty($libri)) {
            include("components/no-item.php");
        } else {
            $arrLen = count($libri);

            for ($i = 0; $i < $arrLen; $i++) {
                $isbn = $libri[$i]['isbn'];
                $prezzo = $libri[$i]['price'];
                include("components/cart-item.php");
            }
        }

        pg_close($connection);
    } else {
        echo "Internal Server Error";
    }
    ?>