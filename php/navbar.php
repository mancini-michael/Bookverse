<?php

if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    include("../views/components/navbar-login.php");
} else {
    include("../views/components/navbar-logout.php");
}
