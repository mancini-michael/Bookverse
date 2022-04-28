<?php include("php/check-login.php"); ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Carrello</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/shopping-cart.css" />
</head>

<body>
    <?php include("components/navbar.php"); ?>

    <div class="shopping-cart d-flex justify-content-center align-items-center flex-column">
        <div class="container row m-auto py-5">
            <?php include("php/shopping-cart.php"); ?>
        </div>
        <div class="d-flex justify-content-center align-items-center w-100 my-3">
            <a href="php/buy.php" class="icon btn btn-success mx-3 p-3"><i class="fa-solid fa-credit-card"></i></a>
            <a href="php/cancella.php" class="icon btn btn-danger mx-3 p-3"><i class="fa-solid fa-trash"></i></a>
            <a href="./welcome.php" class="icon btn btn-primary mx-3 p-3"><i class="fa-solid fa-house"></i></a>
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

    <!-- Checkout JavaScript -->
    <script src="../assets/js/index.js"></script>
</body>

</html>