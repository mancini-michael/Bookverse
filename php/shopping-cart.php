 <?php
    require_once("config.php");

    if ($connection) {
        $email = $_SESSION["email"];

        $q = "SELECT * FROM carrello_utente WHERE email=$1";
        $result = pg_query_params($connection, $q, array($email));

        $libri = pg_fetch_all($result);

        if (empty($libri)) {
            include("components/no-item.php");
        } else {
            $arrLen = count($libri);

            for ($i = 0; $i < $arrLen; $i++) {
                $isbn = $libri[$i]['isbn'];

                $q = "SELECT * FROM catalogo WHERE isbn=$1";
                $result = pg_query_params($connection, $q, array($isbn));
                $libro = pg_fetch_array($result);

                $nome = $libro['titolo'];
                $autore = $libro['autore'];
                $prezzo = $libro['prezzo'];
                $data_pubblicazione = $libro['data_pubblicazione'];
                $descrizione = $libro['descrizione'];
                $img = $libro['copertina'];
                $isbn = $libro['isbn'];

                $data = date("d-m-Y", strtotime($data_pubblicazione));

                include("components/cart-item.php");
            }
        }

        pg_close($connection);
    } else {
        echo "Internal Server Error";
    }
    ?>