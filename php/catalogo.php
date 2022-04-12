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
                              dbname=loginbook user=postgres password=...") 
                              or die('Could not connect: ' . pg_last_error());
        $query = 'SELECT * FROM books_catalogue';
        $result = pg_query_params($dbconn, $query, array ());
        echo "Il nostro catalogo<br>";
        $libri = pg_fetch_all ($result);
        $arrLen = count ($libri);
        echo "<table>";
        echo "<tr><th>Nome</th><th>Autore</th><th>Prezzo</th><th>Data Uscita</th><th>Descrizione</th><th>Img</th><th>isbn</th></tr>";
        for ($i=0; $i<$arrLen; $i++) {
            $nome = $libri[$i]['nome'];
            $autore = $libri[$i]['autore'];
            $prezzo = $libri[$i]['prezzo'];
            $data_rilascio = $libri[$i]['data_rilascio'];
            $descrizione = $libri[$i]['descrizione'];
            $img = $libri[$i]['img'];
            $isbn = $libri[$i]['isbn'];
            echo "<div>". 
                    "<tr><td>$nome</td><td>$autore</td><td>$prezzo</td><td>$data_rilascio</td><td>$descrizione</td><td><img style=\"height: 300px;\" src=\"$img\"></td><td>$isbn</td></tr>" .
                 "</div>";
        }
    ?>
</body>
</html>