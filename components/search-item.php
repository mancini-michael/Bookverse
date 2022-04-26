<div class="col my-3">
    <div class="card mx-auto">
        <img src=<?php echo $img; ?> class="img-fluid" alt=<?php echo $nome; ?> style="height:300px; width:250px">
        <div class="card-body">
            <h4 class="card-title text-black"> <?php echo $nome; ?> </h4>
            <h5 class="card-text text-black m-0"> <?php echo $autore; ?> </h5>
            <br />
            <span class="card-text text-black"> <?php echo $data_rilascio; ?> </span>
            <br />
            <span class="card-text text-black">isbn: <?php echo $isbn; ?> </span>
            <br />
            <span class="card-text text-black bold">prezzo: <?php echo $prezzo; ?> </span>
            <br />
            <a href="../checkout.php?isbn=<?php echo $isbn; ?>" class="btn btn-info my-2">Aggiungi al carrello</a>
        </div>
    </div>
</div>