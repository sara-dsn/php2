<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ok</title>
</head>
<body>
<p>Vous êtes connecté</p>
    <?php
    session_start();
    if($_SESSION["auth"]!=="ok");
    header("Location login-form.php");
    exit();
    ?>
    
</body>
</html>