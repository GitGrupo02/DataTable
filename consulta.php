<?php
    $nombre = $_POST['nom'];
    $edad   = $_POST['ed'];

    if($nombre == "juan"){
        print json_encode('todo fue bien');
    }else{
        echo false;
    }
?>