<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>somme</title>
</head>
<body>
    <?php
  
    function somme($tableau){
      $somme=0;
      foreach($tableau as $valeur) {
        $somme+=$valeur;
      } ;
      return $somme;
    };
    $tab=array(4,3,8,2);
    $somme=somme($tab);

    echo "<p>La somme de 4+3+8+2 est égale à $somme</p>";
    ?>
</body>
</html>