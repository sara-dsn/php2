<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
    <input type="text" name="pw">
    <input type="submit" name="sb" value="submit">
</form>
<?php
if(isset($_POST["pw"])){
    
    // $mon_mdp_hash = password_hash($_POST["pw"],PASSWORD_DEFAULT);
    // echo $mon_mdp_hash;

    $hash_sdsdsd = '$2y$10$wcng2DtE3xeiqnGBtjKbUu.5sgRNrc/RzQUACiHSLP9M4emk4azlS';

    if(password_verify($_POST["pw"],$hash_sdsdsd)){
        echo "<p>Le mot de passe correspond à sdsdsd</p>";
    }
    else {
        echo "<p>Le mot de passe est erroné</p>";
    }

};
?>
</body>
</html>