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
    
    <p> Créez un tableau associatif contenant tous les mois de l’année avec le nombre de jour.</p>
    <p> Parcourir l’ensemble du tableau avec la boucle FOREACH et afficher sous forme d’un
     tableau HTML (TABLE/TR/TD) tous les mois avec le nombre de jours.</p>
    <?php
    $mois = array(
        "janvier" => 31, "février" => 28, "mars" => 31, "avril" => 30, "mai" => 31,
        "juin" => 30, "juillet" => 31, "août" => 31, "septembre" => 30, "octobre" => 31,
        "novembre" => 30, "décembre" => 31
    );


    echo "<table> <tr><th>Mois</th> <th>Nombre jours</th></tr>";
    foreach ($mois as $cle => $nbJours)
        echo ("<tr> <td> $cle</td><td>$nbJours</td></tr>\n");
    echo ("</table>");

    ?>
</body>

</html>