<?php

session_start();
require_once("config.php");

$email = $_POST["inputEmail"];
$query = 'SELECT * FROM users WHERE email=$1';
$result = pg_query_params($connection, $query, array($email));
$tuple = pg_fetch_array($result, null, PGSQL_ASSOC);

if (!$tuple) {
    header("Location: ../views/login.php?mail=wrong");
    exit;
}

$key_enc = '4758';
$met_enc = 'aes256';
$iv = 'mD1g7i9fD56_hf12';
$password = $_POST["inputPassword"];
$pass_enc = 'SELECT passw FROM users WHERE email=$1';
$result_enc = pg_query_params($connection, $pass_enc, array($email));
$row = pg_fetch_row($result_enc);
$pass_enc_ok = $row[0];
$pass_dec = openssl_decrypt($pass_enc_ok, $met_enc, $key_enc, 0, $iv);

if ($password != $pass_dec) {
    header("Location: ../views/login.php?passw=wrong");
    exit;
}

$_SESSION["loggedin"] = true;
header("Location: ../views/welcome.php");

pg_close($connection);
