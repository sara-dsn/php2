    <?php
    $destinataire='client@gmail.com';

    $objet='Offre Brouette pas cher';
    $header='';//initialisation variable  header.
    $header.='From: Brouette Land <entreprise.de.brouette@test.u>';
    $header.='Reply-to: Client <no-reply@monsite.com>';
    $header.='X-Mailer: PHP/'.phpversion();
   
    /* .= est utuliser pour concaténer avec ce qui le contenu de la variable , 
    création d'un message au format Multipart MIME: */
   
    $header.='MIME-Version: 1.0';
    $header.='Content-Type: text/html; charset=UTF-8';
   
    /*Lui est seulement HTML: $header.='Content-Type: Text/html; charset=utf=8';*/
    
    $header.='boundary=\'ligne\'\r\n';
    /*Dans ce cas, le code source du mail est alors scindé en 2 parties distinctes séparées par une "frontière" (boundary en anglais).
     On retrouve cette technique dans les mails avec pièce jointe.*/
    
    $message='Message envoyé';
// $message.='--ligne\r\n';
// $message.='Content-Type: application/octet-stream;';
// $message.='name=\'print.php\'\r\n';
// $message.='Content-Transfert-Encoding: base64\r\n';
// $message.='Content-Disposition: attachement;';
// $message.='filename=\'login-form.php\'\r\n';
// $message.='\r\n';
//lecture fichier:
// $fileadd=file_get_contents('login-form.php');
// //encodage et découpe des données:
// $fileadd.=chunk_split(base64_encode($fileadd));
// //pièce jointe 
// $message.=$fileadd.'\r\n';
// //ligne vide:
// $message.='\r\n';
// //délimite fin du message:
// $message.='--ligne--\r\n';
//envoi:
$envoie=mail($destinataire,$objet,$message,$header);
echo 'Email bien envoy&eacute; &agrave; '.$destinataire;
    ?>
   