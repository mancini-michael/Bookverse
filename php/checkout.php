<?php

require_once("config.php");

if ($connection) {

    $isbn = $_GET["isbn"];
    $q = 'SELECT * FROM books_catalogue WHERE isbn = $1';
    $result = pg_query_params($connection, $q, array($isbn));

    $tuple = pg_fetch_array($result, null, PGSQL_ASSOC);

    if (!$tuple) {
        header("Location: ../catalog.php");
        exit;
    }

    $result = pg_query_params($connection, $q, array($isbn));
    $book_info = pg_fetch_row($result);

    $title = $book_info[0];
    $author = $book_info[1];
    $price = $book_info[2];
    $publicatedAt = $book_info[3];
    $description = $book_info[4];
    $isbn = $book_info[5];
    $img = $book_info[6];

    include("components/checkout-item.php");

    pg_close($connection);
} else {
    echo "Internal Server Error";
}
