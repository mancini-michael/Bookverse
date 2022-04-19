<?php

require_once("config.php");

if ($connection) {
    include("../components/checkout-item.php");

    pg_close($connection);
} else {
    echo "Internal Server Error";
}
