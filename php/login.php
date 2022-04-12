<?php
    $dbconn = pg_connect("host=localhost port=5432 dbname=bookverse user=postgres password=admin") or die('Could not connect: ' . pg_last_error());
    $email = $_POST["inputEmail"];
    $query = 'SELECT * FROM users WHERE email=$1';
    $result = pg_query_params($dbconn, $query, array ($email));
    if (!$tuple=pg_fetch_array($result, null, PGSQL_ASSOC)) {
        header ("Location: ../pages/login.html");
    } else {
        $key_enc = '4758';
        $met_enc = 'aes256';
        $iv = 'mD1g7i9fD56_hf12';
        $password = $_POST["inputPassword"];
        $pass_enc = 'SELECT passw FROM users WHERE email=$1';
        $result_enc = pg_query_params($dbconn, $pass_enc, array ($email));
        $row = pg_fetch_row($result_enc);
        $pass_enc_ok = $row[0];
        $pass_dec = openssl_decrypt($pass_enc_ok, $met_enc, $key_enc, 0, $iv);
        if ($password == $pass_dec) {
            echo "<h1>Login effettuato correttamente</h1>";
        }
        else {
            echo "<h1>Errore</h1>";
        }
    }
?>