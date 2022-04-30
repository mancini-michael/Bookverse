<?php
require_once("config.php");
require '../includes/PHPMailer.php';
require '../includes/SMTP.php';
require '../includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($connection) {
    session_start();
    $email = $_SESSION["email"];
    $isbn = $_GET["isbn"];

    $q = "SELECT * FROM carrello_utente WHERE email=$1 AND isbn=$2";
    $result = pg_query_params($connection, $q, array($email, $isbn));

    $acquisti = pg_fetch_all($result);

    if (!$acquisti) {
        header("Location: ../shopping-cart.php");
    } else {

        $q = "SELECT * FROM catalogo WHERE isbn = $1";
        $result = pg_query_params($connection, $q, array($isbn));
        $libro = pg_fetch_array($result);

        $prezzo = $libro['prezzo'];

        $q2 = "INSERT INTO acquisti_utente VALUES ($1,$2,$3)";
        $result2 = pg_query_params($connection, $q2, array($email, $isbn, $prezzo));

        $q3 = "DELETE FROM carrello_utente WHERE email=$1 AND isbn=$2";
        $result3 = pg_query_params($connection, $q3, array($email, $isbn));

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";
        $mail->Username = email;
        $mail->Password = email_psw;
        $mail->Subject = "Acquisto - Bookverse";
        $mail->setFrom(email);
        $mail->Body = "Il tuo acquisto è andato a buon fine";
        $mail->addAddress ($email);
        $mail->Send();
        $mail->smtpClose();

        header("Location: ../welcome.php");
    }
    pg_close($connection);
} else {
    echo "Internal Server Error";
}