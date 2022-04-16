<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Accedi</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/login.css" />
</head>

<body>
    <?php include("components/navbar.php"); ?>

    <!-- Login Form -->
    <div class="login d-flex justify-content-center flex-column">
        <div class="text-center text-white my-3">
            <h1 class="m-0">Bookverse</h1>
            <span>La tua libreria virtuale</span>
        </div>

        <?php

        if (isset($_GET["mail"])) {
            echo "<div class=\"container alert alert-danger text-center\">
                        Email errata.
                    </div>";
        }

        ?>

        <?php

        if (isset($_GET["passw"])) {
            echo "<div class=\"container alert alert-danger text-center\">
                    Password errata.
                  </div>";
        }

        ?>

        <form action="php/login.php" class="form-check text-center" name="dati" onsubmit="return validateLogin();" method="POST">
            <div class="d-flex justify-content-center align-items-center flex-column mb-auto">
                <input type="email" name="inputEmail" placeholder="Email" size="28" />
                <input type="password" class="my-2" name="inputPassword" placeholder="Password" size="28" />
                <input type="submit" class="btn btn-primary mb-2" name="loginButton" value="Login" />
                <span class="mb-2">
                    Non sei registrato?
                    <a href="registration.php">Registrati</a>
                </span>
            </div>
        </form>
    </div>
    <!--/ Login Form  -->

    <?php include("components/footer.php"); ?>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Font Awesome JavaScript -->
    <script src="https://kit.fontawesome.com/f461cd1aac.js" crossorigin="anonymous"></script>

    <!-- Jquery JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Index JavaScript -->
    <script src="assets/js/validation.js"></script>
</body>

</html>