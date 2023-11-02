<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php
    $debut=new DateTime();
    var_dump($debut);
    // $debut->format(d/m/Y)
    $fin=new DateTime("2024-09-24");

    $resteForm=date_diff($debut,$fin);
    echo $resteForm->format("<br><br> il reste %R%a jours <br> <br>");
    echo date("  H\hi");
    bissextile($debut);
    function bissextile($debut){
        $annee=intval($debut->format("Y"));
        if($annee%4===0){
            echo "<br><br> Nous sommes dans une année bissextile";
        }
        else{ 
            echo "<br><br> Nous ne sommes pas dans une année bissextile";
        };
    };
$erronee=var_dump(checkdate(32,17,2019));
verif($erronee);
function verif($erronee){ 
if ($erronee==false){
    echo "<br><br>  La date 32/17/2019 est erronée";
}
else{
    echo "<br><br>  elle est forcement erronée, cherche bien...";
};};
$debut->add(new DateInterval('P1M'));
echo "<br><br> Dans 1 mois , ce sera le ".$debut->format('d/m/Y');

    ?>
</body>
</html>