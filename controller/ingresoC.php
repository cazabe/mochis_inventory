<?php   
include '../model/bd.php';
date_default_timezone_set("UTC");

$cliente = $_POST["cliente"];
$sector = $_POST["sector"];
$banco = $_POST["banco"];
$caja = $_POST["caja"];
$cantidad = $_POST["cantidad"];
$envio = $_POST["envio"];
$cobroC = $_POST["cobroC"];
$total = $_POST["totalIn"];
$comentario = $_POST["comentario"];
$timeE = $_POST["timeE"];


$sql = "INSERT INTO ingresos(nombreIngreso,sector,banco,cajaMochi,cantidad,envio,venta,totalIngreso,comentario,hora_entrega) VALUES('$cliente','$sector','$banco','$caja','$cantidad','$envio','$cobroC','$total','$comentario','$timeE')";
$query = $conn->prepare($sql);
$query->execute();

if($query){
    echo "Ingreso guardado";
    echo "<script>alert('Ingreso registrado correctamente'); location.href='../index.php'</script>";
    
}else{
    echo "Error al guardar ingreso";
    echo "<script>alert('Ingreso registrado correctamente');</script>";
}

?>