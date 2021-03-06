<?php session_start(); ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catalogo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/catalog.css" />
</head>

<body>

    <?php include("components/navbar.php"); ?>

    <div class="catalog text-center text-white mx-auto pt-5">
        <h1 class="m-1 mt-4">Catalogo</h1>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <span class="m-1">Sfoglia il catalogo per trovare il libro che cerchi!</span>
            <form action="php/search.php" method="POST">
                <div class="d-flex justify-content-center align-items-center">
                    <input class="border rounded w-100 mx-3" type="text" name="inputSearch" placeholder="Cerca il libro...">
                    <button style="border-radius:100%" type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <span class="m-1">Non trovi quello che cerchi? Mandaci un <a href="./contacts.php">messaggio</a> e lo troveremo per te!</span>
        </div>
        <div class="container row mx-auto">
            <?php include("php/catalog.php"); ?>
        </div>
    </div>    

    <?php include("components/footer.php"); ?>

    <?php include("components/arrow.php"); ?>


    <!-- Bootstrap JavaScript -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Font Awesome JavaScript -->
    <script src="https://kit.fontawesome.com/f461cd1aac.js" crossorigin="anonymous"></script>

    <!-- Jquery JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Catalog JavaScript -->
    <script src="assets/js/index.js"></script>

</body>

</html>