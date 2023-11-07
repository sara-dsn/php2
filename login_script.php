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
    // var_dump($_REQUEST);
   
    if ($_SERVER["REQUEST_METHOD"]==="POST"){
        // var_dump($_SESSION);
        $nom=$_POST["nom"];
        $prenom=$_POST["pr"];
        $email=$_POST["m"];
        $user=$_POST["usr"];
        $mp=$_POST["mp"];

       

        // echo password_hash($mp);

        $hash_admin = '$2y$10$g9S/Ixog9k0aCBpBSajKyuwftCxznBEgSmXt.lE29yrpibURnQSGu';
        var_dump($hash_admin);
        var_dump(password_hash($mp,PASSWORD_DEFAULT));
        var_dump(password_verify($mp, $hash_admin)) ;
        echo "<br>";



        function a($email) {
            $valid = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/";
    
            if (preg_match($valid, $email)) {
                return true;
               
            } else {
                echo "<p>Adresse mail invalide</p>";
                return false;
            };
        };

        function b($mp) {
            $hash_admin = '$2y$10$g9S/Ixog9k0aCBpBSajKyuwftCxznBEgSmXt.lE29yrpibURnQSGu';
        if (password_verify($mp, $hash_admin)==true ){
                return true;
             
               
            } else {
                echo "<p>Mot de passe invalide </p>";
                return false;
            };
        };

        function c($nom) {
            $valid ="/^[a-zA-Z]+$/";
    
            if (preg_match($valid, $nom)) {
                return true;
               
            } else {
                echo "<p>Nom de famille invalide</p>";
                return false;
            };
        };
        function d($prenom) {
            $valid = "/^[a-zA-Z]+$/";
    
            if (preg_match($valid, $prenom)) {
                return true;
               
            } else {
                echo "<p>prenom invalide</p>";
                return false;
            };
        };
   
   
    
        if (d($prenom)==true & a($email)==true & d($mp)==true & c($nom)==true){ 

            $_SESSION["auth"]="ok";

        $_SESSION['user']=array(
            "nom"=>array($nom),
            "prenom"=>array($prenom),
            "email"=>array($email),
            // "mp"=>array($mphash),
        );

        $_SESSION['prenom'] = $prenom;
        
        header("Location: ok.php");
        exit();}

        else {
            unset($_SESSION["auth"]);
            session_destroy();
            
         
            echo "veuillez remplir correctement le formulaire";
            // header("Location: login-form.php");
           
            // exit();
        };

        // a($email);
        // b($mp);
        // c($nom);
        // d($prenom);
    };

    ?>
</body>
</html>