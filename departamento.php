<?php
    $conn = mysqli_connect("localhost","root","","baseexamen");
    $sql = "select CODIGO, NOMBRE from REGION";
    $res = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
<html>
<body>
<H1> DEPARTAMENTO </H1>
<from action="indepto.php" method="post">
INGRESE NOMBRE:
<input type="text" name="depto"> <br>

<select name="region">
<?php
  while ($fila = mysqli_fetch_assoc($res)){
      echo '<option value="' . $fila['CODIGO'] . '">' . $fila['NOMBRE'] . '</option>';
  }
?>

</select>
<br>

<input type="submit" name="GRABAR">