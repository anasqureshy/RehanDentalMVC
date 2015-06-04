<?php
/**
 * Created by PhpStorm.
 * User: abdul
 * Date: 6/3/2015
 * Time: 9:36 PM
 */

require_once('../Models/modelPatient.php');

if(isset($_POST['insertPatient'])) {
    //here we have to add patient..
    $patientDetail = new modelPatient();
    $patientDetail->name = $_POST['name'];
    $patientDetail->parent = $_POST['parent'];
    $patientDetail->age = $_POST['age'];
    $patientDetail->gender = $_POST['gender'];
    $patientDetail->registrationDate = $_POST['regdate'];
    $patientDetail->occupation = $_POST['occupation'];
    $patientDetail->recordNumber = $_POST['recnumber'];
    $patientDetail->patientHistory = $_POST['patienthistory'];
    $patientDetail->homeAddress = $_POST['homeaddress'];
    $patientDetail->workAddress = $_POST['workaddress'];
    $patientDetail->mobilenumber = $_POST['mobilenumber'];
    $patientDetail->phonenumber = $_POST['phonenumber'];
    $patientDetail->registerationNumber = $_POST['regnumber'];
    $patientDetail->email = $_POST['email'];

    $patientDetail->InsertPatient();

}


?>