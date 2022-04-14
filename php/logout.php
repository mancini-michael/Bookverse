<?php

session_start();

unset($_SESSION["loggedin"]);
unset($_SESSION["email"]);

session_destroy();

header("Location: ../views/index.php");
