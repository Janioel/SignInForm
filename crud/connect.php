<?php

$con=new mysqli('localhost', 'janio', '12345', 'crudoperation');

if(!$con){
    die(mysqli_error($con));
}

?>