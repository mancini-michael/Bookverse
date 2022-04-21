<?php

session_start();

if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    include("navbar-login.php");
} else {
    include("navbar-logout.php");
}
