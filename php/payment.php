<?php
if (isset($_GET["isbn"])) {
    include("components/single-payment-form.php");
} else {
    include("components/payment-form.php");
}
