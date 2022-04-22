<?php

require_once("config.php");

if ($connection) {
    $q = 'SELECT * FROM books_catalogue';
    $result = pg_query_params($connection, $q, array());
    $libri = pg_fetch_all($result);
    $arrLen = count($libri);

    for ($i = 0; $i < $arrLen; $i++) {
        $nome = $libri[$i]['titolo'];
        $autore = $libri[$i]['autore'];
        $prezzo = $libri[$i]['prezzo'];
        $data_rilascio = $libri[$i]['data_rilascio'];
        $descrizione = $libri[$i]['descrizione'];
        $img = $libri[$i]['img'];
        $isbn = $libri[$i]['isbn'];

        include("components/catalog-item.php");
    }

    pg_close($connection);
} else {
    echo "Internal Server Error";
}
