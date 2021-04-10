<?php
session_start();
include '../model/bd.php';

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND user_password = '$password'";
$query = $conn->prepare($sql);
$query->execute();

if($query){
    echo "<script>alert('Bienvenido mochis'); location.href='../Home/home.php'</script>";
}else{
    echo "<script>alert('Credenciales incorrectas'); location.href='./index.php'</script>";
}

?>
