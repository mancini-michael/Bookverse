<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registrazione</title>
</head>
<body>
<?php
    if (!isset($_POST["reg"])) {
        header("Location: ..");
    } else {
        $dbconn = pg_connect("host=localhost port=5432
            dbname=loginbook user=postgres password=Albiotibullo1!") 
            or die('Could not connect: ' . pg_last_error());
        $email = $_POST["inputEmail"];
        $query = "SELECT * FROM users WHERE email=$1";
        $result = pg_query_params($dbconn, $query, array($email));
        if ($tuple=pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo "<p> L'email è gia stata usata per creare un account";
            echo "<p> per favore torna alla pagina di login utilizzando il comando seguente</p>";
            echo "<button href=\"../pages/login.html\"></button>";
        }
        else {
            $nome = $_POST["inputNome"];
            $cognome = $_POST["inputCognome"];
            $password = $_POST["inputPassword"];
            $indirizzo = $_POST["inputIndirizzo"];
            $citta = $_POST["inputCitta"];
            $cap = $_POST["CAP"];
            $key_enc = '4758';
            $met_enc = 'aes256';
            $iv = 'mD1g7i9fD56_hf12';
            $pass_enc = openssl_encrypt ($password, $met_enc, $key_enc, 0, $iv);
            $query2 = 'INSERT INTO users VALUES ($1,$2,$3,$4,$5,$6,$7)';
            $result = pg_query_params($dbconn, $query2, 
                array ($nome, $cognome, $email, $pass_enc, $indirizzo, $citta, $cap));
            if ($result) {
                echo "<p>la registrazione è andata a buon fine</p>";
                echo "<p>utilizza il seguente comando per loggarti </p>";
                echo "<a href=\"../pages/login.html\"></a>";
            }
            else {
                die ("C'è stato un errore :-(" . pg_last_error());
            }
        }
    } 
?>    
</body>
</html>