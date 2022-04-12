<?php
  include("conexion.php");
  include("alumno_modelo.php");

  class Alumno_ctrl{

    function regresar_equipo($numequipo){
        $conn = new Conexion("localhost", "root", "", "toolsteacher");

        $regreso = "<table border=1><th>Matricula</th><th>Nombres</th><tr>";

        $conn = $oconn->regresaConexion();

        if($conn->connect_error){
            die("Fallo la conexion!! =" .$conn->connect_error);
        }
        
        $csql ="SELECT IdAlumno, matricula, nombres, apellido1, apellido2, fk_idequipo FROM alumno WHERE fk_idequipo=".$numequipo;
        
        $result = $conn->query($csql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
              $regreso = $regreso."<td>".$row['matricula']."</td><td>".$row['nombres']."</td><tr>";
            }
        }
        $regreso=$regreso."</table>";
        return $regreso;
    }
  }

?>