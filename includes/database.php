<?php

$db =mysqli_connect('localhost','root','123456789','encuestaSaga');

if(!$db){
    echo"conexion no exitosa";
    exit;
}
