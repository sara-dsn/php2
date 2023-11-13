<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$mail= new PHPMailer(true);

//le smtp (protocole d'envoi de courrier):
// $mail->isSMTP(); -> ça n'a pas fonctionné ( code 111: connection refusée)

//configuration de l'adresse du serveur SMTP:
$mail->Host ='127.0.0.1';

//désactivation de l'authentification SMTP:
$mail->SMTPAuth =false;

//configuration du port SMTP:
$mail->port =1025;

//expediteur mail (adresse mail + nom(falcutatif)):
$mail->setFrom('entreprise.de.brouette@gmail.com','BrouetteLand');

//destinataire(s)(adresse + nom(falcutatif)):
$mail->addAddress('client1@gmail.com','mr prospect');
$mail->addAddress('client2@gmail.com','mme prospect');

//adresse mail de renvoie de réponse du client(falcutatif)
$mail->addReplyTo("reponse@acheterUneBrouette.com","reponse");

//autre destinataire : CC recois une copie du message et BCC reçois une copie invisible du message:
$mail->addCC('cc@copie.com');
$mail->addBCC('bcc@copieInvisible.com');

//pour avoir un email en format HTML:
$mail->isHTML(true);

//ajout des pièces jointes:
$mail->addAttachment('13.jpg');

//sujet du mail:
$mail->Subject='Offre Brouette pas cher';

//message:
$mail->Body="-50% sur une séléction de brouette dont le best seller : La Brouette verte";

//On envoie le mail dans un block try/catch pour capturer les  éventuelles erreurs:
if($mail){
    try{
        $mail->send();
        echo 'Email envoyé avec succès';}
        catch(exception $e){
            echo"L'envoie de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
        }
}

?>