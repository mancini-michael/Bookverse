<?php

session_start();

unset($_SESSION["loggedin"]);
unset($_SESSION["nome"]);
unset($_SESSION["cognome"]);
unset($_SESSION["email"]);
unset($_SESSION["indirizzo"]);
unset($_SESSION["citta"]);
unset($_SESSION["cap"]);

session_destroy();

header("Location: ../");
