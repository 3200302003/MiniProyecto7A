<?php
    class Conexion {
        private $servidor = "";
        private $usuario = "";
        private $contra = "";
        private $nbd = "";

        function Conexion($serv, $us, $con, $nbd){
            $this->servidor = $serv;
            $this->usuario = $us;
            $this->contra = $con;
            $this->nbd = $nbd;
        }

        function regresaConexion(){
            $conn = new mysqli($this->servidor, $this->usuario, $this->contra, $this->nbd);
            if($conn->connect_error){
                return null;
            }else{
                return $conn;
            }
        }


    }
?>