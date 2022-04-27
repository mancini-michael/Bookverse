<?php

require_once("config.php");

if ($connection) {
    $q = 'SELECT * FROM catalogo';
    $result = pg_query_params($connection, $q, array());
    $libri = pg_fetch_all($result);
    $arrLen = count($libri);

    for ($i = 0; $i < $arrLen; $i++) {
        $nome = $libri[$i]['titolo'];
        $autore = $libri[$i]['autore'];
        $prezzo = $libri[$i]['prezzo'];
        $data_pubblicazione = $libri[$i]['data_pubblicazione'];
        $descrizione = $libri[$i]['descrizione'];
        $img = $libri[$i]['copertina'];
        $isbn = $libri[$i]['isbn'];

        $data = date("d-m-Y", strtotime($data_pubblicazione));

        include("components/catalog-item.php");
    }

    pg_close($connection);
} else {
    echo "Internal Server Error";
}
