<?php
$nom = $_POST['user_name'];
$prenom = $_POST['user_surname'];
$email = $_POST['user_email'];
$telephone = $_POST['telephone'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

if (empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($sujet) || empty($message)) {
    echo "Veuillez remplir tous les champs du formulaire.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Veuillez saisir une adresse e-mail valide.";
} else {
    echo "Merci $prenom $nom de nous avoir contacté à propos de \"$sujet\".<br><br>";
    echo "Un de nos conseillers vous contactera soit à l’adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande :<br><br>";
    echo "$message";
}