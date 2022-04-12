<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A Meaningful Page Title</title>
</head>
<body>
    <form action="captura_calificaciones.php">
        Dame el numero de equipo = <input type="text" id="nequipo" name="nequipo">
    <br>
    <input type="submit" value="enviar">
    <?php
        include("alumno_controlador.php");
        echo "<br>";
        if(isset($_GET['nequipo'])){
            $nequipo = $_GET['nequipo'];
            $oalctrl = new Alumno_ctrl;
            echo $oalctrl->regresar_equipo($nequipo);
        }
    ?>
    </form>
</body>
</html>