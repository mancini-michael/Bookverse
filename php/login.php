<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
</head>
<body>
    <?php
        if (!isset($_POST["loginButton"])) {
            header ("Location: ..");
        }
        else {
            $dbconn = pg_connect("host=localhost port=5432
                dbname=loginbook user=postgres password=Albiotibullo1!") 
                or die('Could not connect: ' . pg_last_error());
            $email = $_POST["inputEmail"];
            $query = 'SELECT * FROM users WHERE email=$1';
            $result = pg_query_params($dbconn, $query, 
                array ($email));
            if (!$tuple=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                header ("Location: ../pages/login.html");
            }
            else {
                $key_enc = '4758';
                $met_enc = 'aes256';
                $iv = 'mD1g7i9fD56_hf12';
                $password = $_POST["inputPassword"];
                $pass_enc = 'SELECT password FROM users WHERE email=$1';
                $result_enc = pg_query_params($dbconn, $pass_enc, 
                    array ($email));
                $row = pg_fetch_row($result_enc);
                $pass_enc_ok = $row[0];
                $pass_dec = openssl_decrypt($pass_enc_ok, $met_enc, $key_enc, 0, $iv);
                if ($password == $pass_dec) {
                    echo "Login effettuato correttamente";
                }
                else {
                    header ("Location: ../pages/login.html");
                }
            }
        }
    ?>
</body>
</html>