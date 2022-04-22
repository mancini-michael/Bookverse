<?php

session_start();

if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    header("Location: ./login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contatti</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/contacts.css" />
</head>

<body>
    <?php include("components/navbar.php"); ?>

    <div class="contacts d-flex justify-content-center align-items-center">
        <div class="container-md w-md-50 text-start text-white bg-dark rounded-3 mx-5 py-3">

            <?php

            if (isset($_GET["send"])) {
                echo "<div class=\"container alert alert-danger text-center\">
                        Aggiungere un titolo e un commento.
                     </div>";
            }

            ?>

            <h1 class="text-center m-0">Libri da aggiungere</h1>
            <form action="php/commenti.php" method="post">
                <div class="mb-2">
                    <label for="text" class="form-label m-0">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci un titolo..." />
                </div>
                <div class="mb-2">
                    <label for="description" class="form-label m-0">
                        Descrizione
                    </label>
                    <br />
                    <textarea name="description" class="form-control" id="description" rows="10" placeholder="Aggiungi una descrizione..."></textarea>
                </div>
                <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary">Invia</button>
                </div>
            </form>
        </div>
    </div>

    <?php include("components/footer.php"); ?>

    <?php include("components/arrow.php"); ?>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Font Awesome JavaScript -->
    <script src="https://kit.fontawesome.com/f461cd1aac.js" crossorigin="anonymous"></script>

    <!-- Jquery JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Contacts JavaScript -->
    <script src="../assets/js/index.js"></script>
</body>

</html>