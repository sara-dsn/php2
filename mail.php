    <?php
    $destinataire='client@gmail.com';

    $objet='Offre ###';

    $header.='Form:Sara DSN <dosana@gmail.com>\r\n';
    $header.='Reply-to: prospect; <client@gmail.com';
    $header.='X-Mailer: PHP/'.phpversion();
    /* .= est utuliser pour concaténer avec ce qui le contenu de la variable , 
    création d'un message au format Multipart MIME: */
    $header.='MIME-Version: 1.0\r\n';
    $header.=' Content-Type: multipart/mixed;'
    /*Lui est seulement HTML: $header.='Content-Type: Text/html; charset=utf=8';*/
    $header.='boundary=\'ligne\'\r\n';
    /*Dans ce cas, le code source du mail est alors scindé en 2 parties distinctes séparées par une "frontière" (boundary en anglais).
     On retrouve cette technique dans les mails avec pièce jointe.*/
    
    $message='<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Offre ###</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
         html{
                 font-size:100%;}
        body{
             font-size: 11rem;   /* si html=100% alors 1rem=16px*/}
    </style>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <h1>Mon 1er Mail HTML</h1>
             </div>
        </div> 
        <div class="row">
             <div class="col-12">
                 <p>Ceci est un paragraphe</p>
             </div>
        </div>
        <div class="row">
            <div class="col-12">
                <im src="13.jpg" title="Brouette" alt="Brouette Verte" class="img-fluid">
            </div>
         </div>
    </div>
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</html>'
$message.='--ligne\r\n';
$message.='Content-Type: application/octet-stream;';
$message.='name=\'print.php\'\r\n';
$message.='Content-Transfert-Encoding: base64\r\n';
$message.='Content-Disposition: attachement;';
$message.='filename=\'print.php\'\r\n';
$message.='\r\n';

$fileadd=file_get_contents('print.php');
$fileadd=
    ?>
   