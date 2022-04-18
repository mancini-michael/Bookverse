<?php

require_once("config.php");

if ($connection) {
    session_start();

    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    $q = 'SELECT * FROM users WHERE email=$1';
    $result = pg_query_params($connection, $q, array($email));
    $tuple = pg_fetch_array($result, null, PGSQL_ASSOC);

    if (!$tuple) {
        header("Location: ../login.php?mail=wrong");
        exit;
    }

    $key_enc = '4758';
    $met_enc = 'aes256';
    $iv = 'mD1g7i9fD56_hf12';

    $q = 'SELECT * FROM users WHERE email=$1';
    $result_enc = pg_query_params($connection, $q, array($email));
    $user_info = pg_fetch_row($result_enc);

    $nome = $user_info[0];
    $cognome = $user_info[1];
    $pass_enc_ok = $user_info[3];
    $indirizzo = $user_info[4];
    $citta = $user_info[5];
    $cap = $user_info[6];

    $pass_dec = openssl_decrypt($pass_enc_ok, $met_enc, $key_enc, 0, $iv);

    if ($password != $pass_dec) {
        header("Location: ../login.php?passw=wrong");
        exit;
    }

    $_SESSION["loggedin"] = true;
    $_SESSION["nome"] = $nome;
    $_SESSION["cognome"] = $cognome;
    $_SESSION["email"] = $email;
    $_SESSION["indirizzo"] = $indirizzo;
    $_SESSION["citta"] = $citta;
    $_SESSION["cap"] = $cap;

    header("Location: ../welcome.php");

    pg_close($connection);
} else {
    echo "Internal Server Error";
}
