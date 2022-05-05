<?php
    $conn = mysqli_connect("localhost","root","","baseexamen");
    $sql = "select CODIGO, NOMBRE from REGION";
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
  <title> DEPARTAMENTO </title>
</head>
<body>
  <header>
    <h1 id="titulo"> REGISTRO DE DEPARTAMENTO </h1>
    <p id="titulo"> <img src="Imagenes/Departamentos.jpg" width="787" height="237"> </p>
  </header>
<form action="todepartamento.php" method="post">
  <table width="700" border="0" align="center">
    <tr>
      <td> INGRESE NOMBRE DEL DEPARTAMENTO: </td>
      <td> <input type="text" name="departamento"> </td>
    </tr>
    <tr>
      <td> SELECCIONE REGIÓN: </td>
      <td><select name="region">
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
</body>
</html>