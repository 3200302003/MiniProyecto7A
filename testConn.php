<?php
    include('conexion.php');

    echo "<b>archivo para probar una conexion</b>";

    $oconn = new Conexion("localhost", "root", "toolsteacher");

    $conn = $oconn->regresaConexion();

    if($conn !=null){
        echo "conexion exitosa";
    }else{
        echo "error";
    }

?>