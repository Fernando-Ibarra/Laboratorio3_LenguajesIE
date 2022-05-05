<?php
    $departamento = $_POST['departamento'];
    $region = $_POST['region'];
    $conn = mysqli_connect("localhost","root","","baseexamen");
    $sql = "INSERT INTO DEPARTAMENTO(NOMBRE, REGION) VALUES('$departamento', $region)";
    if(mysqli_query($conn,$sql)){
        echo "DEPARTAMENTO INSERTADO CORRECTAMENTE";
    }else{
        echo "ERROR, REGISTRADO NO INSERTADO";
    }
    mysqli_close($conn);
?> 