<?php session_start(); ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catalogo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/catalog.css" />
</head>

<body>

    <?php include("../components/navbar.php"); ?>

    <div class="catalog text-center text-white mx-auto">
        <div class="d-flex justify-content-center align-items-center flex-column pt-5">
            <div class="container-md row mx-auto">
                <?php
                    require_once("config.php");

                    if ($connection) {
                        $libro = $_POST["inputSearch"];

                        $q = 'SELECT * FROM catalogo WHERE titolo~*$1';
                        $result = pg_query_params($connection, $q, array($libro));
                        $libri = pg_fetch_all($result);

                        if ($libri == null) {
                            echo "Nulla";
                        } else {

                            $arrLen = count($libri);

                            for ($i = 0; $i < $arrLen; $i++) {
                                $nome = $libri[$i]['titolo'];
                                $autore = $libri[$i]['autore'];
                                $prezzo = $libri[$i]['prezzo'];
                                $data_pubblicazione = $libri[$i]['data_pubblicazione'];
                                $descrizione = $libri[$i]['descrizione'];
                                $img = $libri[$i]['copertina'];
                                $isbn = $libri[$i]['isbn'];

                                $data = date("d-m-Y", strtotime($data_pubblicazione));

                                include("../components/search-item.php");
                            }
                        }

                        pg_close($connection);
                    } else {
                        echo "Internal Server Error";
                    }
                ?>
            </div>
            <form action="../catalog.php" class="mt-5">
                <button type="submit" class="btn btn-primary">
                    Torna al catalogo
                </button>  
            </form>
        </div>
    </div>

    <?php include("../components/footer.php"); ?>

    <?php include("../components/arrow.php"); ?>


    <!-- Bootstrap JavaScript -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Font Awesome JavaScript -->
    <script src="https://kit.fontawesome.com/f461cd1aac.js" crossorigin="anonymous"></script>

    <!-- Jquery JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Catalog JavaScript -->
    <script src="../assets/js/index.js"></script>

</body>

</html>
