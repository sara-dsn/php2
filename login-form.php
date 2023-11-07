<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form login</title>
</head>
<body>

    <form method="post" action="login_script.php" >

    <label for="nom">Nom : </label><input type="text" name="nom" >
    <br><br>
    <label for="pr">Prénom : </label><input type="text" name="pr" >
    <br><br>
    <label for="m">Email : </label><input type="text" name="m" >
    <br><br>
    <label for="usr">Identifiant : </label><input type="text" name="usr" >
    <br><br>
    <label for="mp" >Mot de passe : </label><input type="text" name="mp">

    <button type="submit" >Envoyer</button>
</form>

</body>
</html>