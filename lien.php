<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lien</title>
</head>
<body>
   
    <?php
    function lien($url,$texte){
        return "<a href='$url'>$texte</a>";
    }
    echo lien("https://www.reddit.com/","Reddit Hug");

    ?>
</body>
</html>