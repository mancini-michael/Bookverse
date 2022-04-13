<?php

$dbconn = pg_connect("host=localhost port=5432 dbname=bookverse user=postgres password=admin") or die('Could not connect: ' . pg_last_error());
$email = $_POST["inputEmail"];
$query = "SELECT * FROM users WHERE email=$1";
$result = pg_query_params($dbconn, $query, array($email));
if ($tuple = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "<p> L'email è gia stata usata per creare un account";
    echo "<p> per favore torna alla pagina di login utilizzando il comando seguente</p>";
    echo "<button href=\"../login.php\"></button>";
} else {
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
    $query2 = 'INSERT INTO users VALUES ($1,$2,$3,$4,$5,$6,$7)';
    $result = pg_query_params($dbconn, $query2, array($nome, $cognome, $email, $pass_enc, $indirizzo, $citta, $cap));
    if ($result) {
        header("location: ../login.php");
    } else {
        die("C'è stato un errore: " . pg_last_error());
    }
}
