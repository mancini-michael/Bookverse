<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Registrazione</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/registration.css" />
</head>

<body>
    <?php include("components/navbar.php"); ?>

    <!-- Registration Form -->
    <div class="registration d-flex justify-content-center flex-column">
        <div class="text-center text-white my-3">
            <h1 class="m-0">Bookverse</h1>
            <span>La tua libreria virtuale</span>
        </div>

        <?php

        if (isset($_GET["send"])) {
            echo "<div class=\"container alert alert-danger text-center\">
                    Utente già registrato alla libreria.
                  </div>";
        }

        ?>

        <form action="php/registration.php" class="form-check text-center" name="dati" onsubmit="return validateRegistration();" method="POST">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <input type="text" class="col m-2" name="inputNome" placeholder="Nome" size="28" />
                <input type="text" class="mb-2" name="inputCognome" placeholder="Cognome" size="28" />
                <input type="email" class="mb-2" name="inputEmail" placeholder="Email" size="28" />
                <input type="password" class="mb-2" name="inputPassword" placeholder="Password" size="28" />
                <input type="text" class="mb-2" name="inputIndirizzo" placeholder="Indirizzo" size="28" />
                <input type="text" class="mb-2" name="inputCitta" placeholder="Città" size="28" />
                <input type="text" class="mb-2" name="CAP" placeholder="CAP" size="28" pattern="[0-9]{5}" />
                <div class="checkbox mb-2">
                    <input type="checkbox" class="mx-2" id="inputCheck" name="inputCheck" />
                    <label for="inputCheck">Acconsento all'invio dei miei dati</label>
                </div>
                <input type="submit" class="btn btn-primary mb-2" name="reg" value="Registrati" />
                <span class="mb-2">
                    Sei già un utente della libreria?
                    <a href="../views/login.php">Accedi</a>
                </span>
            </div>
        </form>
    </div>
    <!--/ Registration Form  -->

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