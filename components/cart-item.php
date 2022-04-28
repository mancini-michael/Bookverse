<div class="text-center col my-3 pt-5">
    <div class="card mx-auto">
        <img src=<?php echo $img; ?> class="img-fluid" alt=<?php echo $nome; ?>>
        <div class="card-body">
            <h4 class="card-title text-black"> <?php echo $nome; ?> </h4>
            <h5 class="card-text text-black m-0"> <?php echo $autore; ?> </h5>
            <br />
            <span class="card-text text-black"> <?php echo $data; ?> </span>
            <br />
            <span class="card-text text-black">isbn: <?php echo $isbn; ?> </span>
            <br />
            <span class="card-text text-black bold">prezzo: <?php echo $prezzo; ?>€</span>
            <br />
            <div class="d-flex justify-content-center m-3">
                <a href="./php/buy-item.php?isbn=<?php echo $isbn; ?>" class="icon btn btn-success m-1 p-3"><i class="fa-solid fa-credit-card"></i></a>
                <a href="./php/delete-item.php?isbn=<?php echo $isbn; ?>" class="icon btn btn-danger m-1 p-3"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
    </div>
</div>