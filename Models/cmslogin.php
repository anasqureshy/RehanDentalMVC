<?php
/**
 * Created by PhpStorm.
 * User: abdul
 * Date: 5/30/2015
 * Time: 2:46 AM
 */

require_once('../Connections/dbconnection.php');
require_once('logger.php');

class cmslogin {

    public $cmsuser;


    function __constructor() {
    }

    function LoginUser($email,$password) {

        $db = dbconnection::getInstance();
        $mysqli = $db->getConnection();

        //Here we go this is our login query it will load related user
        $sql_query = "SELECT * from intranetuser where email='".$email."' and password = '".sha1($password)."'";


        $result = $mysqli->query($sql_query);
        //after querying we would have results in result variable

        if(mysqli_num_rows($result) == 1) {
            //if the result it valid it will have only one row

            while($row = mysqli_fetch_array($result)){
                session_start(); //start the session

                //set session variables
                $user = new logger();
                $user->isOnline = false;
                $user->email = $row[0];
                $user->type = $row[2];
                $cmsuser = $user;
                $_SESSION['logger'] = $user;
                return true;

            }//make session return true and that should redirect the page accordingly :p


        }

        return false;//we don't find anything related

    }
} 