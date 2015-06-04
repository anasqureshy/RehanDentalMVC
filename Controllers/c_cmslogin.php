<?php
/**
 * Created by PhpStorm.
 * User: abdul
 * Date: 5/30/2015
 * Time: 11:13 PM
 */

//include and require files here
require_once('../Models/cmslogin.php');

//here we control the flow of login page yes we do that here apko koi aitraz

if(isset($_POST['btnlogincms'])) {

    //if you want to login then check for login
    $loginitem =  new cmslogin();
    $didUserLoggedIn =  $loginitem->LoginUser($_POST['email'],$_POST['password']);


    if($didUserLoggedIn == true) {
        header('Location: ../cmspatientregister.php');
        die;
    }
    else {
        header('Location: ../cmslogin.php?problem=wrong');
        die;
    }

}


?>