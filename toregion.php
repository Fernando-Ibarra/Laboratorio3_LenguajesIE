<?php
  $nombre = $_POST['region'];
  $conn = mysqli_connect("localhost","root","","baseexamen");
  $sql = "INSERT INTO REGION(NOMBRE) VALUES('$nombre')";
  if(mysqli_query($conn,$sql)){
    echo "REGISTRO INSERTADO CORRECTAMENTE";
  }else{
    echo "ERROR, REGISTRADO NO INSERTADO";
  }
  mysqli_close($conn);
?>