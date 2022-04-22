<div class="container-fluid user row justify-content-around m-auto pt-5">
    <div class="col-lg-3 my-lg-auto mt-5">
        <div class="user-icon d-flex justify-content-center align-items-center mx-auto">
            <h1 class="m-0"><?php echo $_SESSION["nome"][0]; ?></h1>
        </div>
    </div>
    <div class="col-lg-6 text-center text-white my-auto">
        <div class="user-info rounded-3 m-5 p-3">
            <div class="d-flex justify-content-center align-items-center flex-column h-100 mt-3">
                <h1>Informazioni personali</h1>
                <span> <b>nome:</b> <?php echo $_SESSION["nome"]; ?></span>
                <span> <b>cognome:</b> <?php echo $_SESSION["cognome"]; ?> </span>
                <span> <b>email:</b> <?php echo $_SESSION["email"]; ?> </span>
                <span> <b>indirizzo:</b> <?php echo $_SESSION["indirizzo"]; ?> </span>
                <span> <b>città:</b> <?php echo $_SESSION["citta"]; ?> </span>
                <span> <b>CAP:</b> <?php echo $_SESSION["cap"]; ?> </span>
            </div>
            <a href="./comments.php" class="btn btn-primary mt-3 mx-1">I tuoi commenti</a>
            <a href="./shopping-cart.php" class="btn btn-primary mt-3 mx-1">Il tuo carrello</a>
        </div>
    </div>
    <div class="text-center mt-auto mb-1">
        <a href="#content">
            <i class="fa-solid fa-chevron-down"></i>
        </a>
    </div>
</div>