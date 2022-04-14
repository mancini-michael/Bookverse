<?php

require_once("config.php");

$q = 'SELECT * FROM books_catalogue';
$result = pg_query_params($connection, $q, array());
$libri = pg_fetch_all($result);
$arrLen = count($libri);

echo "<div class=\"container row mx-auto\">";
for ($i = 0; $i < $arrLen; $i++) {
    $nome = $libri[$i]['titolo'];
    $autore = $libri[$i]['autore'];
    $prezzo = $libri[$i]['prezzo'];
    $data_rilascio = $libri[$i]['data_rilascio'];
    $descrizione = $libri[$i]['descrizione'];
    $img = $libri[$i]['img'];
    $isbn = $libri[$i]['isbn'];
    echo "
    <div class=\"col-3 mx-auto\">
        <div class=\"container mx-auto my-3\">
            <img src=\"" . $img . "\" alt=\"" . $nome . "\" class=\"img-fluid m-1\">
            <h5 class=\"m-1\">" . $nome . "</h5>
            <span class=\"m-1\">" . $autore . "</span>
            <br />
            <span class=\"m-1\">isbn: " . $isbn . "</span>
            <br />
            <span class=\"m-1\">pubblicato: " . $data_rilascio . "</span>
            <br />
            <span class=\"m-1\">" . $prezzo . "</span>
            <br />
            <a href=\"#\" class=\"btn btn-primary\">Acquista</a>
        </div>
    </div>
    ";
}
echo "</div>";

pg_close($connection);
