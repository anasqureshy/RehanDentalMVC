<?php
/**
 * Created by PhpStorm.
 * User: abdul
 * Date: 6/4/2015
 * Time: 5:14 AM
 */

class doctorManager {

    //loading all the doctors setting their data

    public $doctorsList = array();



    function GetAllDoctors() {

        $db = dbconnection::getInstance();
        $mysqli = $db->getConnection();

        $query = "select * from doctors left join daysofweek on doctors.doctid = daysofweek.doctid";

        $result = $mysqli->query($query);



        while($row = mysqli_fetch_array($result)) {
            $currentDoctor = new doctor();
            $currentDoctor->name = $row[1];
            $currentDoctor->description = $row[2];
            $currentDoctor->slotminutes = $row[3];
            $currentDoctor->fhour = $row[4];
            $currentDoctor->fminutes = $row[5];
            $currentDoctor->thours = $row[6];
            $currentDoctor->tminutes = $row[7];

            $currentDoctor->availabledays = Array($row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14]);
            $currentDoctor->doctid = $row[15];

            $this->doctorsList[$currentDoctor->name] = $currentDoctor; //keep doctor with his name :p
        }

    }

};


?>