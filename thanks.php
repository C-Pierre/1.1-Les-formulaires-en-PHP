<?php

$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$object = $_POST['user_object'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];

echo nl2br ("Merci $firstname $lastname de nous avoir contacté à propose de $object. 
Un de nos conseiller vous contactera soit à l'adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : 
$message");

?>
