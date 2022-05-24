<?php
    require_once("config.php");

    if ($connection) {
        session_start();
    
        $oldPsw = $_POST["oldPsw"];
        $newPsw1 = $_POST["newPsw1"];
        $newPsw2 = $_POST["newPsw2"];
        $email = $_SESSION["email"];
    
        $key_enc = '4758';
        $met_enc = 'aes256';
        $iv = 'mD1g7i9fD56_hf12';
        $pass_enc = openssl_encrypt($oldPsw, $met_enc, $key_enc, 0, $iv);

        $q = 'SELECT * FROM utente WHERE passw=$1 and email=$2';
        $result = pg_query_params($connection, $q, array($pass_enc, $email));
        $tuple = pg_fetch_array($result, null, PGSQL_ASSOC);
    
        if (!$tuple) {
            header("Location: ../change-psw.php?oldPsw=wrong");
            exit;
        }

        if ($newPsw1 != $newPsw2) {
            header("Location: ../change-psw.php?newPsw=wrong");
            exit;
        }

        if ($newPsw1 != $newPsw2 || $oldPsw == $newPsw1) {
            header("Location: ../change-psw.php?newEqualOld=wrong");
            exit;
        }
    
        $key_enc = '4758';
        $met_enc = 'aes256';
        $iv = 'mD1g7i9fD56_hf12';
        $pass_enc_new = openssl_encrypt($newPsw1, $met_enc, $key_enc, 0, $iv);
    
        $q = 'UPDATE utente SET passw=$1 WHERE email=$2';
        $result_enc = pg_query_params($connection, $q, array($pass_enc_new, $email));
    
        header("Location: ../welcome.php?changePassword=wrong");
    
        pg_close($connection);
    } else {
        echo "Internal Server Error";
    }



?>