<?php

session_start();
session_destroy();

unset($_SESSION["loggedin"]);

header("Location: ../views/index.php");
