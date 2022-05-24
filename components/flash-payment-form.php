<form action="./php/flash-buy.php?isbn=<?php echo $_GET["isbn"]; ?>" method="post">
<div class="container text-center w-100">
        <div class="input-group flex-nowrap my-3">
            <span class="input-group-text" id="addon-wrapping">TITOLARE</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>
        <div class="input-group flex-nowrap my-3">
            <span class="input-group-text" id="addon-wrapping">CRC</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>
        <div class="input-group flex-nowrap my-3">
            <span class="input-group-text" id="addon-wrapping">SCADENZA</span>
            <input type="month" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>
        <div class="input-group flex-nowrap my-3">
            <span class="input-group-text" id="addon-wrapping">CVC</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" pattern="[0-9]{3}" required>
        </div>
        <button class="btn btn-primary" type="submit">Acquista</button>
    </div>
</form>