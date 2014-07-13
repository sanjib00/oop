<?php


class hero{

/*$name;
$ID;
$salary; */
    function __construct ($name,$id,$salary){

    $this->$name =$name;
    $this->$id=$id;
    $this->salary=$salary;

    echo $name, $id, $salary ;
}
}


$hero=new hero('James','007',10000)


/*
$ID="007";
$name='James';
$salary=10000; */

?>