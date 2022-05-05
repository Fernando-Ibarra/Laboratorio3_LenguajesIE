<?php
  $nombre = $_POST['region'];
    $conn = mysqli_connect("localhost","root","","baseexamen");
    $sql = "INSERT INTO REGION(NOMBRE) VALUES('$nombre')";
    $res = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>