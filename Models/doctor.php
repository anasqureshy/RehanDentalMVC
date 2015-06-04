<?php
/**
 * Created by PhpStorm.
 * User: abdul
 * Date: 6/4/2015
 * Time: 5:12 AM
 */


class doctor {

    //the class is inteded to provide details about doctors specifically
    //their names, schedule etc
    public $doctid;
    public $name, $description;
    public $fhour, $fminutes;
    public $thours, $tminutes;
    public $slotminutes;

    public $availabledays = Array(0,0,0,0,0,0,0);


};

?>