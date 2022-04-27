<?php

require_once("config.php");

if ($connection) {
    $email = $_POST["inputEmail"];
    $q = "SELECT * FROM utente WHERE email=$1";
    $result = pg_query_params($connection, $q, array($email));

    if ($tuple = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        header("Location: ../registration.php?send=esiste");
        exit;
    }

    $nome = $_POST["inputNome"];
    $cognome = $_POST["inputCognome"];
    $password = $_POST["inputPassword"];
    $indirizzo = $_POST["inputIndirizzo"];
    $citta = $_POST["inputCitta"];
    $cap = $_POST["CAP"];
    $key_enc = '4758';
    $met_enc = 'aes256';
    $iv = 'mD1g7i9fD56_hf12';
    $pass_enc = openssl_encrypt($password, $met_enc, $key_enc, 0, $iv);
    $q = 'INSERT INTO utente VALUES ($1,$2,$3,$4,$5,$6,$7)';
    $result = pg_query_params($connection, $q, array($nome, $cognome, $email, $pass_enc, $indirizzo, $citta, $cap));

    if (!$result) {
        die("ERRORE: inserimento nel database non riuscito");
    }

    header("location: ../login.php");

    pg_close($connection);
} else {
    echo "Internal Server Error";
}
