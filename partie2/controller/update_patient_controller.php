<?php
session_start();
require "../model/database.php";
require "../model/patient.php";
$message = [];
$error = [];

$updatePatient = false;
if (!empty($_POST["id"])) {
    // Création d'un nouvel objet
    
        $id = $_POST["id"];
        $patientObj = new Patient;
        $detailPatient = $patientObj->detailPatient($id);
        $_SESSION["idPatientToUpdate"] = $detailPatient["id"];
}
if (isset($_POST["submit"])) {
    $getlastname = $_POST["lastname"];
    $getfirstname = $_POST["firstname"];
    $getbirthdate = $_POST["birthdate"];
    $getphone = $_POST["phone"];
    $getmail = $_POST["mail"];
    $getid = $_SESSION["idPatientToUpdate"];
    if($patientObj->updatePatient($getlastname, $getfirstname, $getbirthdate, $getphone, $getmail,$getid)){
        $message["update"] = "patient modifier";
        $updatePatient = true ; 
    }else{
        $message["update"] = "erreur";
    }
}

