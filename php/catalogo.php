<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Catalogo</h1>
    <?php
        $dbconn = pg_connect("host=localhost port=5432
                              dbname=loginbook user=postgres password=Zainetto01") 
                              or die('Could not connect: ' . pg_last_error());
        $query = 'SELECT * FROM books_catalogue';
        $result = pg_query_params($dbconn, $query, array ());
        $libri = pg_fetch_all ($result);
        $arrLen = count ($libri);
        echo "<table style=\"border: 1px solid;\">";
        echo "<tr><th>Copertina</th><th>Autore</th><th>Titolo</th><th>Data Uscita</th><th>ISBN</th><th>Prezzo</th><th>Descrizione</th></tr>";
        for ($i=0; $i<$arrLen; $i++) {
            $nome = $libri[$i]['titolo'];
            $autore = $libri[$i]['autore'];
            $prezzo = $libri[$i]['prezzo'];
            $data_rilascio = $libri[$i]['data_rilascio'];
            $descrizione = $libri[$i]['descrizione'];
            $img = $libri[$i]['img'];
            $isbn = $libri[$i]['isbn'];
            echo "<tr><td><img style=\"height: 300px;\" src=\"$img\"><td>$autore</td><td>$nome</td><td>$data_rilascio</td><td>$isbn</td><td>$prezzo</td><td>$descrizione</td></tr>";
        }
    ?>
</body>
</html>