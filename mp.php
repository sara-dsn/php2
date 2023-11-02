<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mp</title>
</head>
<body>
    <form method="POST" action="">
    Mot de passe: <input type="text" name="mp">
    <button type="submit" name="btn">Envoyer</button>
</form>
  
    <?php

if (isset($_POST["btn"])) {
    $mp = $_POST["mp"];
    function verif($mp) {
        $valid = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/";

        if (preg_match($valid, $mp)) {
            return true;
            echo "Mot de passe valide";
        } else {
            echo "Mot de passe invalide";
            return false;
        };
    };

    verif($mp);
    
};
    ?>


</body>
</html>