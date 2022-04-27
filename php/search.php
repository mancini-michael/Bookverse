<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/catalog.css" />
</head>

<body>
    <?php
    require_once("config.php");

    if ($connection) {
        $libro = $_POST["inputSearch"];

        $q = 'SELECT * FROM catalogo WHERE titolo~*$1';
        $result = pg_query_params($connection, $q, array($libro));
        $libri = pg_fetch_all($result);

        if ($libri == null) {
            echo "Nessun libro trovato";
        } else {
            $arrLen = count($libri);

            for ($i = 0; $i < $arrLen; $i++) {
                $nome = $libri[$i]['titolo'];
                $autore = $libri[$i]['autore'];
                $prezzo = $libri[$i]['prezzo'];
                $data_pubblicazione = $libri[$i]['data_pubblicazione'];
                $descrizione = $libri[$i]['descrizione'];
                $img = $libri[$i]['img'];
                $isbn = $libri[$i]['isbn'];

                include("../components/search-item.php");
            }
        }
        pg_close($connection);
        echo "<div style=\"display:flex; justify-content:center; align-items:center\">" .
            "<a href=\"../catalog.php\"><button class=\"btn btn-primary\">Torna al catalogo</button></a>" .
            "</div>";
    } else {
        echo "Internal Server Error";
    }
    ?>
</body>

</html>