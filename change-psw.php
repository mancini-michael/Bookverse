<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambia Password</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/registration.css" />

</head>
<body>
    <?php include("components/navbar.php"); ?>

    <!-- Change Password Form -->
    <div class="registration d-flex justify-content-center flex-column">
        <div class="text-center text-white my-3">
            <h1 class="m-0">Bookverse</h1>
            <span>La tua libreria virtuale</span>
        </div>

        <?php

        if (isset($_GET["oldPsw"])) {
            echo "<div class=\"container alert alert-danger text-center\">
                        La vecchia password è errata.
                  </div>";
        }

        ?>

        <?php

        if (isset($_GET["newPsw"])) {
            echo "<div class=\"container alert alert-danger text-center\">
                    Le due password inserite non sono uguali
                  </div>";
        }

        ?>

        <?php

        if (isset($_GET["newEqualOld"])) {
            echo "<div class=\"container alert alert-danger text-center\">
                    La vecchia password è uguale alla nuova
                  </div>";
        } 

        ?>

        <form action="php/cambia-psw.php" method="post" class="form-check text-center">
            <input type="password" name="oldPsw" placeholder="Inserisci la vecchia password" size="40" required>
            <br>
            <input type="password" name="newPsw1" placeholder="Inserisci la nuova password" size="40" required>
            <br>
            <input type="password" name="newPsw2" placeholder="Ripeti la nuova password" size="40" required>
            <br>
            <br>
            <input type="submit" value="conferma" class="btn btn-primary">
            <input type="reset" value="cancella" class="btn btn-primary">
        </form>
    </div>  

    <!--/ Change Password Form  -->

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
