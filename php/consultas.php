<?php
    include('../php/conexion.php'); //trae la conexion

    $sql= "SELECT * FROM persona";

    $consulta = mysqli_query($datos,$sql) or die(mysqli_error());
    //$tabla=""; //OTRA FORMA
    $return_arr = array();

    while($fila = mysqli_fetch_array($consulta)){
        // $tabla.='{ //OTRA FORMA
        //     "id":"'.$fila['id'].'", //OTRA FORMA
        //     "nombre":"'.$fila['nombre'].'", //OTRA FORMA
        //     "documento":"'.$fila['documento'].'", //OTRA FORMA
        //     "tel":"'.$fila['tel_1'].'", //OTRA FORMA
        //     "direccion":"'.$fila['direccion'].'" //OTRA FORMA
        // },';

        $row_array['id']                   = utf8_encode($fila['id']);
        $row_array['nombre']               = utf8_encode($fila['nombre']);
        $row_array['documento']            = utf8_encode($fila['documento']);
        $row_array['tel']                  = utf8_encode($fila['tel_1']);
        $row_array['direccion']            = utf8_encode($fila['direccion']);

        array_push($return_arr, $row_array);
        
    }

    // $tabla = substr($tabla,0, strlen($tabla) -1); //OTRA FORMA
    // echo '{"data":['.$tabla.']}'; //OTRA FORMA

    print '{"data":'.(json_encode($return_arr).'}');

?>