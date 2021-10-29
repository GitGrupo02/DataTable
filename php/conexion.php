<?php
    function conexion(){
        $server   = "localhost";
        $user     = "root";
        $pass     = "";
        $db       = "consultas_02";

        // $conexion = (mysqli_connect($server,$user,$pass));
        // mysqli_select_db($conexion, $db) or die ("npo se encuentra la db");
        // echo 'exito';

        $conexion = new mysqli($server,$user,$pass,$db);

        // if($conexion -> connect_error){
        //     print('la conexion fallo'.$conexion -> connect_error);
        // }else{
        //     echo ('bien');
        // }
        return $conexion;
    }   
    $datos = conexion();     
?>