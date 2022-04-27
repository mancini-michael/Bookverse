<div class="col mt-3">
    <div class="card mx-auto">
        <img src=<?php echo $img; ?> class="img-fluid" alt=<?php echo $nome; ?>>
        <div class="card-body p-2">
            <h4 class="card-title text-black fs-5 m-0"> <?php echo $titolo; ?> </h4>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <span class="card-text text-black bold">prezzo: <?php echo $totale_speso; ?>€</span>
                <div class="count text-center text-white rounded-3">
                    <span> <?php echo $num_acquisti; ?> </span>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="./checkout.php?isbn=<?php echo $isbn; ?>" class="btn btn-info my-2">Acquista di nuovo</a>
        </div>
    </div>
</div>