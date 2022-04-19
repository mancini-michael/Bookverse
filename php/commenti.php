<?php
    require_once("config.php");
    if ($connection) {
        session_start();
        $email = $_SESSION["email"];
        
        $nome_libro = $_POST["inputLibro"];
        $descrizione = $_POST["inputDescrizione"];
        $q = "INSERT INTO comments_users VALUES ($1, $2, $3)";
        $result = pg_query_params($connection, $q, array($email, $nome_libro, $descrizione));

        pg_close($connection);

        header("Location: ../welcome.php");
    } else {
        echo "Internal Server Error";
    }
?>