<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=bookverse user=postgres password=admin") or die('Could not connect: ' . pg_last_error());
$query = 'SELECT * FROM books_catalogue';
$result = pg_query_params($dbconn, $query, array());
$libri = pg_fetch_all($result);
$arrLen = count($libri);
echo "<div class=\"row mx-auto\">";
for ($i = 0; $i < $arrLen; $i++) {
    $nome = $libri[$i]['titolo'];
    $autore = $libri[$i]['autore'];
    $prezzo = $libri[$i]['prezzo'];
    $data_rilascio = $libri[$i]['data_rilascio'];
    $descrizione = $libri[$i]['descrizione'];
    $img = $libri[$i]['img'];
    $isbn = $libri[$i]['isbn'];
    echo "<div class=\"col\">prova</div>";
}
echo "</div>";
