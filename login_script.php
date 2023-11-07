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
   
    if (isset($_POST["envoie"])){
        // var_dump($_SESSION);
        $nom=$_POST["nom"];
        $prenom=$_POST["pr"];
        $email=$_POST["m"];
        $id=$_POST["usr"];
        $hash_admin = '$2y$10$g9S/Ixog9k0aCBpBSajKyuwftCxznBEgSmXt.lE29yrpibURnQSGu';
        // $mp=$_POST["mp"];

        // echo password_hash($mp);
        // var_dump("mon hash admin : ".$hash_admin);
        // // var_dump("<br><br>le mot de passe que je viens de hash : ".password_hash($mp,PASSWORD_DEFAULT));
        // var_dump("<br><br>boleen (password_verify):".password_verify($_POST["mp"], $hash_admin)) ;
        // // $verif=password_verify($mp, $hash_admin);
        // // var_dump($verif);
        // echo "<br>";

        function a($email) {
            $valid = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/";
    
            if (preg_match($valid, $email)) {
                return true;
               
            } else {
                echo "<p>Adresse mail invalide</p>";
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
   
        function e($id) {
            $valid =  "/^[a-zA-Z]+$/";
    
            if (preg_match($valid, $id)) {
                return true;
               
            } else {
                echo "<p>Identifiant invalide</p>";
                return false;
            };
        };
   
       
        if (d($prenom)==true & a($email)==true &  c($nom)==true&e($id)==true &password_verify($_POST["mp"], $hash_admin)){ 

            $_SESSION["auth"]="ok";

        // $_SESSION['user']=array(
        //     "nom"=>array($nom),
        //     "prenom"=>array($prenom),
        //     "email"=>array($email),
        //     // "mp"=>array($mphash),
        // );

        $_SESSION['pr'] = $prenom;
        $_SESSION['nom'] = $nom;
        $_SESSION['m'] = $email;
        $_SESSION['user'] = $id;
       
        // if (password_verify($_POST["mp"], $hash_admin)){
        //     $_SESSION["auth"]="ok";
        //  return true;
          
            
        //  } else {
        //      echo "<p>Mot de passe invalide </p>";
        //      return false;
        
        //  };
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