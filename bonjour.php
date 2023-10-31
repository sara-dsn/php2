<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bonjour</title>
</head>
<body>
    <?php

    $test = '<p>bonjour tout le monde</p>';

    echo $test;
echo "<p>Voici votre adresse IP : ".$_SERVER['REMOTE_ADDR']." et voici la mienne : ".$_SERVER['SERVER_ADDR']."</p>";
    ?>
    
</body>
</html>