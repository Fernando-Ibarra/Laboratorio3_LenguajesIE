<?php
    $dpi = $_POST['dpi'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $salario = $_POST['salario'];
    $municipio = $_POST['municipio'];
    $conn = mysqli_connect("localhost","root","","baseexamen");
    $sql = "INSERT INTO EMPLEADO(DPI, NOMBRE, TELEFONO, SALARIO, MUNICIPIO) VALUES('$dpi', '$nombre', '$telefono', $salario, $municipio)";
    if(mysqli_query($conn,$sql)){
        echo "EMPLEADO INSERTADO CORRECTAMENTE";
    }else{
        echo "ERROR, REGISTRADO NO INSERTADO";
    }
    mysqli_close($conn);
?> 