<div class="container col-lg-5 text-center my-lg-auto mt-5 mx-2 py-5">
    <img src=<?php echo $img; ?> alt=<?php echo $title; ?> class=" img-fluid">
</div>
<div class="checkout-info container col-lg-6 rounded-3 text-white my-lg-auto my-3 mx-2 p-3">
    <form id="checkout">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <span class="text-center" id="isbn"><?php echo $isbn; ?></span>
            <h1> <?php echo $title; ?> </h1>
            <h5> <?php echo $author; ?> </h5>
            <h5> <?php echo $publicatedAt; ?> </h5>
            <span class="text-center"> <?php echo $description; ?> </span>
            <div class="d-flex justify-content-center align-items-center flex-lg-row flex-column m-2 p-2">
                <span class="price mx-5" id="price"><?php echo $price; ?></span>
                <button type="submit" class="btn btn-info mx-5 my-2">Aggiungi al carrello</button>
            </div>
        </div>
    </form>
</div>