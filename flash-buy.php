<?php include("php/check-login.php"); ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pagamento</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/shopping-cart.css" />
</head>

<body>
    <?php include("components/navbar.php"); ?>

    <div class="shopping-cart d-flex justify-content-center align-items-center flex-column">
        <div class="container-md text-center mt-5 py-5">
                    <div class="container-md text-white bg-dark rounded w-50 mt-2 py-2">
                        <h3>Resoconto:</h3>
                        <div class="d-flex flex-column">
                            <span>Elementi: 
                                <?php
                                
                                    require("php/config.php");

                                    if(isset($_GET["isbn"]) && $connection) {
                                        $q = "SELECT titolo FROM catalogo WHERE isbn=$1";
                                        $result = pg_query_params($connection, $q, array($_GET["isbn"]));
                                        $totale = pg_fetch_all($result);
                                        echo $totale[0]["titolo"];   
                                    }

                                ?>
                            </span>  
                            <span>prezzo:
                            <?php
                                
                                require("php/config.php");

                                if(isset($_GET["isbn"])) {
                                    $email = $_SESSION["email"];
                                    $q = "SELECT prezzo FROM catalogo WHERE isbn=$1";
                                    $result = pg_query_params($connection, $q, array($_GET["isbn"]));
                                    $totale = pg_fetch_all($result);
                                    echo $totale[0]["prezzo"];                            
                                } 
                                
                            ?>
                            ???
                            </span>
                        </div>
                    </div>
                </div>
                <?php include("components/flash-payment-form.php"); ?>
            </div>
        </div>

    <?php include("components/footer.php"); ?>

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