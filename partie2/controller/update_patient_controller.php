<?php
require "../model/database.php";
require "../model/patient.php";
$message = [];
$patientObj = new Patient;
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $detailPatient = $patientObj->detailPatient($id);
}
if (isset($_POST["submit"])) {
    $getlastname = $_POST["lastname"];
    $getfirstname = $_POST["firstname"];
    $getbirthdate = $_POST["birthdate"];
    $getphone = $_POST["phone"];
    $getmail = $_POST["mail"];
    $getid = $_GET["id"];
    if($patientObj->updatePatient($getlastname, $getfirstname, $getbirthdate, $getphone, $getmail,$getid)){
        $message["update"] = "patient modifier";
    }else{
        $message["update"] = "erreur";
    }
  
    
}
