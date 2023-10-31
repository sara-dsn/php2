<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Départements</title>
</head>
<body>
    <?php
$departements = array(

    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),

    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),

    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),

    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")

);

ksort($departements);
foreach($departements as $region => $dep){
    echo "<p> $region : ";
    foreach($dep as $liste){
        echo" $liste </p>";
    };
    echo "<br>";
};

ksort($departements);
foreach($departements as $region => $dep){
    echo "<p> $region : ";

        $nbr=count($dep);
        echo" $nbr</p>";
    
    echo "<br>";
};



    ?>
</body>
</html>