<div class="col mt-3">
    <div class="card mx-auto">
        <img src=<?php echo $img; ?> class="img-fluid" alt=<?php echo $nome; ?>>
        <div class="card-body">
            <h4 class="card-title text-black"> <?php echo $titolo; ?> </h4>
            <span class="card-text text-black bold">prezzo: <?php echo $prezzo; ?> </span>
        </div>
        <div class="text-center">
            <a href="./checkout.php?isbn=<?php echo $isbn; ?>" class="btn btn-info mb-3">Acquista di nuovo</a>
        </div>
    </div>
</div>