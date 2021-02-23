<?php
require "../model/database.php";
require "../model/patient.php";
$message = [];
$error = [];

$updatePatient = false;
if (!empty($_POST['modifyPatient'])) {
    // Création d'un nouvel objet
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $patientsObj = new Patient;
        $detailPatient = $patientObj->detailPatient($id);
    }
}
if (isset($_POST["submit"])) {
    $getlastname = $_POST["lastname"];
    $getfirstname = $_POST["firstname"];
    $getbirthdate = $_POST["birthdate"];
    $getphone = $_POST["phone"];
    $getmail = $_POST["mail"];
    $getid = $_POST["id"];
    if($patientObj->updatePatient($getlastname, $getfirstname, $getbirthdate, $getphone, $getmail,$getid)){
        $message["update"] = "patient modifier";
        $updatePatient = true ; 
    }else{
        $message["update"] = "erreur";
    }
}
