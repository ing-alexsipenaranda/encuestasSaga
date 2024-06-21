<?php

$db =mysqli_connect('localhost','root','','encuestaSaga');

if(!$db){
    echo"conexion no exitosa";
    exit;
}
