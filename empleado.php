<?php
    $conn = mysqli_connect("localhost","root","","baseexamen");
    $sql = "select CODIGO, NOMBRE from MUNICIPIO";
    $res = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="estilos.css">  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> EMPLEADOS </title>
</head>
<body>
  <header id="header">
    <h1 id="tituloP"> REGISTRO DE EMPLEADO </h1>
    <p> <img src="Imagenes/Empleado.png" width="787" height="237"> </p>
  </header>
<form action="toempleado.php" method="post" id="table">
  <table width="700" border="0" align="center">
    <tr>
      <td> INGRESE DPI DEL EMPLEADO: </td>
      <td> <input type="text" name="dpi"> </td>
    </tr>
    <tr>
      <td> INGRESE NOMBRE DEL EMPLEADO: </td>
      <td> <input type="text" name="nombre"> </td>
    </tr>
    <tr>
      <td> INGRESE TELEFONO DEL EMPLEADO: </td>
      <td> <input type="text" name="telefono"> </td>
    </tr>
     <tr>
      <td> INGRESE SALARIO DEL EMPLEADO: </td>
      <td> <input type="text" name="salario"> </td>
    </tr>
    <tr>
      <td> SELECCIONE MUNICIPIO: </td>
      <td><select name="municipio">
        <?php
          while ($fila = mysqli_fetch_assoc($res)){
          echo '<option value="' . $fila['CODIGO'] . '">' . $fila['NOMBRE'] . '</option>';
        }
        ?>
      </select> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td> <input type="submit" value="INGRESAR"> </td>
    </tr>
  </table>
</form>
<div id="botones">
  <a href="region.html" class="Boton"> REGIÓN </a>
  <a href="departamento.php" class="Boton"> DEPARTAMENTO </a>
  <a href="municipio.php" class="Boton"> MUNICIPIO </a>
  <a href="index.html" class="Boton"> INDEX </a>
</div>
</body>
</html>