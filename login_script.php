<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
    session_start();
    // var_dump($_SESSION);
    var_dump($_REQUEST);
    
    if ($_POST["id"]=="s" && $_POST["mp"]=="s"){
        $_SESSION["auth"]="ok";
        var_dump($_SESSION);
        $email=$_POST["email"];
        $mp=$_POST["mp"];
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        function a($email) {
            $valid = "/^([1-9].[a-z])+@([1-9].[a-z])+.{a-z}{2}$/";
    
            if (preg_match($valid, $email)) {
                return true;
               
            } else {
                echo "Adresse mail invalide";
                return false;
            };
        };
        function b($mp) {
            $valid = "/^(.[1-9].[a-z].){5}@$/";
    
            if (preg_match($valid, $mp)) {
                return true;
               
            } else {
                echo "Mot de passe invalide entrez au moins 5 caractères";
                return false;
            };
        };
        function c($nom) {
            $valid = "/^[a-z].[a-z]{2}$/";
    
            if (preg_match($valid, $nom)) {
                return true;
               
            } else {
                echo "Nom de famille invalide";
                return false;
            };
        };
        function d($prenom) {
            $valid = "/^[a-z].[a-z]{2}$/";
    
            if (preg_match($valid, $prenom)) {
                return true;
               
            } else {
                echo "prenom invalide";
                return false;
            };
        };
    }
        else {
            unset($_SESSION["auth"]);
       
            session_destroy();
            echo "erreur mp";
            header("Location: login-form.php");
            exit();
        };
        if ($prenom==true&&$email==true&&$mp==true&&$nom==true){ 
        $user=array(
            "nom"=>array($nom),
            "prenom"=>array($prenom),
            "email"=>array($email),
            "mp"=>array($mp),
        );
        header("Location: ok.php");
        exit();
    }

    ?>
</body>
</html>