<?php
require "../model/database.php";
require "../model/patient.php";

$patientObj = new Patient;
$patientArray = $patientObj->showPatient();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $detailPatient = $patientObj->detailPatient($id);
}else{
    $detailPatient = false;
}
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $deletePatient = $patientObj->deletePatient($id);
    header("Refresh: 0");
}

