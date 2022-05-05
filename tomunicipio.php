<?php
    $municipio = $_POST['municipio'];
    $departamento = $_POST['departamento'];
    $conn = mysqli_connect("localhost","root","","baseexamen");
    $sql = "INSERT INTO MUNICIPIO(NOMBRE, DEPARTAMENTO) VALUES('$municipio', $departamento)";
    if(mysqli_query($conn,$sql)){
        echo "MUNICIPIO INSERTADO CORRECTAMENTE";
    }else{
        echo "ERROR, REGISTRADO NO INSERTADO";
    }
    mysqli_close($conn);
?> 