<?php
    $nombre = $_POST['depto'];
    $region = $_POST['region'];
    $conn = mysqli_connect("localhost","root","","baseexamen");
    $sql = "INSERT INTO DEPARTAMENTO(NOMBRE, REGION) VALUES('$nombre','$region')";
    $res = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>