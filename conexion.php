<?php
    $servername = "localhost";
    $database = "proyectox";
    $username = "root";
    $password = "";

    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $conn = mysqli_connect($servername,$username,$password,$database);
    
    $sql = "INSERT INTO usuario (usuario,pass) VALUES ('$usuario','$pass')";

    if(mysqli_query($conn,$sql)){
        echo "Insercion de datos exitosa :3";
    }else{
        echo "Fallo la insercion de datos";
    }

    mysqli_close($conn);
?>
