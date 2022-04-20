<div class="container-fluid user row justify-content-around m-auto pt-5">
    <div class="col-lg-3 my-auto">
        <div class="user-icon d-flex justify-content-center align-items-center mx-auto">
            <h1 class="m-0"><?php echo $_SESSION["nome"][0]; ?></h1>
        </div>
    </div>
    <div class="col-lg-6 text-center text-white my-auto">
        <div class="user-info m-5 p-3">
            <div class="d-flex justify-content-center align-items-center flex-column h-100 mt-5">
                <span> <?php echo $_SESSION["nome"]; ?> </span>
                <span> <?php echo $_SESSION["cognome"]; ?> </span>
                <span> <?php echo $_SESSION["email"]; ?> </span>
                <span> <?php echo $_SESSION["indirizzo"]; ?> </span>
                <span> <?php echo $_SESSION["citta"]; ?> </span>
                <span> <?php echo $_SESSION["cap"]; ?> </span>
            </div>
            <a href="./render-comments.php" class="btn btn-primary mt-5">I tuoi commenti</a>
        </div>
    </div>
    <div class="text-center mt-auto mb-1">
        <a href="#content">
            <i class="fa-solid fa-chevron-down"></i>
        </a>
    </div>
</div>