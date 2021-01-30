<?php

$mysqliobject = new mysqli("localhost", "root", "lkdansfl", "phplearning");

if($mysqliobject){

    echo $mysqliobject ."connect to database";
}else{
    echo "not connected to database";
}



?>