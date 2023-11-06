<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
<form action="post.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fichier" ><input value="envoyer" type="submit">
</form>
<?php
var_dump($_FILES);
$nom=$_POST['nom'];
// var_dump($_POST);
echo "nom: ".$nom;
?>
    
</body>
</html>