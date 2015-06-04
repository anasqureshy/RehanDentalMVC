<?php
/**
 * Created by PhpStorm.
 * User: abdul
 * Date: 6/3/2015
 * Time: 9:24 PM
 */

//here we are going to make class that will represent patient


require_once('../Connections/dbconnection.php');

class modelPatient {

    public $registerationNumber = null;
    public $recordNumber= null;
    public $name= null;
    public $parent= null;
    public $occupation= null, $registrationDate= null;
    public $phonenumber = null;
    public $mobilenumber= null;
    public $homeAddress= null, $workAddress= null;
    public $age= null, $gender= null;
    public $email= null, $patientHistory= null;

    function InsertPatient() {
        //connecting to database
        $db = dbconnection::getInstance();
        $mysqli = $db->getConnection();


        //writing query
        $sql_query = "insert into patientmaster(name,parent,homeaddress,workaddress,regnumber,age,mobilenumber,phonenumber,recordnumber,occupation,email,gender,patienthistory,entrydate) values('".
            $this->name."','".$this->parent."','".$this->homeAddress."','".$this->workAddress."',".$this->registerationNumber
            .",".$this->age.",'".$this->mobilenumber."','".$this->phonenumber."',".$this->recordNumber.",'".$this->occupation
            ."','".$this->email."','".$this->gender."','".$this->patientHistory."','".$this->registrationDate."' )";


        echo $sql_query;


        //executing query
        $result = $mysqli->query($sql_query);


        //after querying we would have results in result variable
        if($result == 1) {
            header('Location: ../cmspatientregister.php?entry=set');
            die;
        }
        else {
            header('Location: ../cmspatientregister.php?notentry=set');
            die;
        }


        }//end of the patient entry


};

?>