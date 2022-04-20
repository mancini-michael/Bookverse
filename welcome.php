<?php

session_start();

if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    header("Location: ./");
    exit;
}

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Homepage</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/welcome.css" />
</head>

<body>

    <?php include("components/navbar.php"); ?>

    <?php
    echo "</br>";
    echo "<div class=  \"content bg-black\" id=\"content\">";
    session_start();
    $iniziale = $_SESSION["nome"][0];
    echo "<div class=\"text-center text-white mx-5\">" .
        "<div class=\"container row text-center my-5 mx-auto\">" .
        "<div class=\"col my-2\">" .
        "<div class=\"picture picture d-flex justify-content-center align-items-center mx-auto mb-2\">" .
        "<h1 class=\"m-0\">$iniziale</h1>" .
        "</div>" .
        "<br />" .
        "</div>" .
        "</div>" .
        "</div>";
    echo "</div>";
    echo "<div align=center>" .
        "<span>" .
        "<h1> Nome: " . $_SESSION["nome"] . "</h1>" .
        "</span>" .
        "<h1> Cognome: " . $_SESSION["cognome"] . "</h1>" .
        "<h1> Email: " . $_SESSION["email"] . "</h1>" .
        "<h1> Indirizzo: " . $_SESSION["indirizzo"] . "</h1>" .
        "<h1> Città: " . $_SESSION["citta"] . "</h1>" .
        "<h1> CAP: " . $_SESSION["cap"] . "</h1>" .
        "<button type=\"button\" class=\"btn btn-primary\" style=\"font-size:24px\"><a style=\"color:white; text-decoration:none\"href=\"php/acquisti.php\">Visualizza i tuoi acquisti</a></button>" .
        "<br /><button style=\"margin-top:5px; margin-bottom:5px; font-size:22px\" type=\"button\" class=\"btn btn-primary\"><a style=\"color:white; text-decoration:none\"href=\"render-comments.php\">Visualizza i tuoi commenti</a></button>";
    echo "</div>";
    ?>

    <?php include("components/content_users.php"); ?>

    <?php include("components/footer.php"); ?>

    <?php include("components/arrow.php"); ?>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Font Awesome JavaScript -->
    <script src="https://kit.fontawesome.com/f461cd1aac.js" crossorigin="anonymous"></script>

    <!-- Jquery JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Welcome JavaScript -->
    <script src="../assets/js/index.js"></script>
</body>

</html>