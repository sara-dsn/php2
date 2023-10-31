<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Année non bissextile</title>
</head>
<body>
    <?php
    $annee=array("Janvier"=> "31",
                    "Février"=>"28",
                    "Mars"=>"31",
                    "Avril"=>"30",
                    "Mai"=>"31",
                    "Juin"=>"30",
                    "Juillet"=>"31",
                    "Août"=>"31",
                    "Septembre"=>"30",
                    "Octobre"=>"31",
                    "Novembre"=>"30",
                    "Décembre"=>"31");
                    echo "<table border='1'><section><tr>
                    <td>Mois</td>
                    <td>Jours</td></tr><tr>";
                    foreach($annee as $cle =>$valeur){
                        echo "<td>".$cle."</td><td> ".$valeur." </td></tr>";
                    };
                    echo "</section></table><br><br>";

                    echo "<table border='1'><section><tr>
                    <td>Mois de 31 jours</td>
                    <td>Jours</td></tr><tr>";
                    foreach($annee as $cle =>$valeur){
                        if($valeur==="31"){
                        echo "<td>".$cle."</td><td> ".$valeur." </td></tr>";};
                    };
                    echo "</section></table><br><br>";
                    echo "<table border='1'><section><tr>
                    <td>Mois de 30 jours</td>
                    <td>Jours</td></tr><tr>";
                    foreach($annee as $cle =>$valeur){
                        if($valeur==="30"){
                        echo "<td>".$cle."</td><td> ".$valeur." </td></tr>";};
                    };
                    echo "</section></table><br><br>";
                    echo "<table border='1'><section><tr>
                    <td>Mois de 28 jours</td>
                    <td>Jours</td></tr><tr>";
                    foreach($annee as $cle =>$valeur){
                        if($valeur==="28"){
                        echo "<td>".$cle."</td><td> ".$valeur." </td></tr>";};
                    };
                    echo "</section></table>"
    ?>
</body>
</html>