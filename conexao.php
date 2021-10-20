<?php
    
    $con = new mysqli('localhost:3307', 'root', '1234', 'academia');

    if($con->connect_error){
        $msg = "Falha ao conectar: ".$con->connect_error;
        alertErro($msg);
    }

?>