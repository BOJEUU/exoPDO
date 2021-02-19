<?php
require "../model/database.php";
require "../model/patient.php";
// Regex Perso
$regexBirth = '/^\d{4}(\-)(((0)[0-9])|((1)[0-2]))(\-)([0-2][0-9]|(3)[0-1])$/';
$regexName = '/^[a-zA-Zéèê\-]+$/';
$regexNumber = '/^0[0-9]{9}$/';
$regexDate = '/^(([0]{1}[1-9]{1})|([1-2]{1}[0-9]{1})|([3]{1}[0-1]{1}))$/';

// mise en place d'un tableau d'erreurs
$errors = [];
// mise en place d'un tableau de messages
$messages = [];
// check input lastname
if (isset($_POST['lastname'])) {

    if (!preg_match($regexName, $_POST['lastname'])) {
        $errors['lastname'] = 'Veuillez respecter le format ex. DOE';
    }

    if (empty($_POST['lastname'])) {
        $errors['lastname'] = 'Veuillez renseigner ce champ';
    }
}
if (isset($_POST['firstname'])) {

    if (!preg_match($regexName, $_POST['firstname'])) {
        $errors['firstname'] = 'Veuillez respecter le format ex. DOE';
    }

    if (empty($_POST['firstname'])) {
        $errors['firstname'] = 'Veuillez renseigner ce champ';
    }
}
if (isset($_POST['birthdate'])) {

    if (!preg_match($regexBirth, $_POST['birthdate'])) {
        $errors['birthdate'] = 'Veuillez respecter le format ex. DOE';
    }

    if (empty($_POST['birthdate'])) {
        $errors['birthdate'] = 'Veuillez renseigner ce champ';
    }
}
if (isset($_POST['phone'])) {

    if (!preg_match($regexNumber, $_POST['phone'])) {
        $errors['phone'] = 'Veuillez respecter le format ex. DOE';
    }

    if (empty($_POST['phone'])) {
        $errors['phone'] = 'Veuillez renseigner ce champ';
    }
}
// check input mail
if (isset($_POST['mail'])) {

    if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = 'Veuillez respecter le format ex. mail@mail.fr';
    }

    if (empty($_POST['mail'])) {
        $errors['mail'] = 'Veuillez renseigner ce champ';
    }
}
// Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
if (empty($errors) && isset($_POST["submit"])) {
    $patientObj = new Patient;
    $getlastname = htmlspecialchars($_POST['lastname']);
    $getfirstname = htmlspecialchars($_POST['firstname']);
    $getbirthdate = htmlspecialchars($_POST['birthdate']);
    $getphone = htmlspecialchars($_POST['phone']);
    $getmail =  htmlspecialchars($_POST['mail']);
    if ($patientObj->insertPatient($getlastname, $getfirstname, $getbirthdate, $getphone, $getmail)) {
        $messages['addPatient'] = 'Patient enregistré';
    } else {
        $messages['addPatient'] = 'Erreur de connexion lors de l\'enregistrement';
    }
}
