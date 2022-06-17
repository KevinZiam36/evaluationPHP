<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border:1px solid black;
            width: 100%;
        }   
        td {
            text-align:center;
            padding: 2px;
            border:1px solid burlywood;
        }   

        th{
            text-decoration: underline;
        }

    </style>
</head>

<body>
    
<h1>Affichez avec une boucle FOREACH tous les éléments du tableau associatif $_SERVER </h1>
    <?php

$serveur = $_SERVER;
echo "<table> <tr><th>Variable</th> <th>Valeur</th></tr>";
foreach ($serveur as $cle => $valeur)
    echo ("<tr> <td> $cle</td><td>$valeur</td></tr>\n");
echo ("</table>");  

    ?>
</body>

</html>