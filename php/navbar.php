<?php

if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    include("../components/navbar-login.php");
} else {
    include("../components/navbar-logout.php");
}
