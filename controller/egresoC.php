<?php 
include '../model/bd.php';

$nombreE = $_POST["nombreE"];
$cantidad = $_POST["cantidad"];
$costo = $_POST["costo"];
$totalE = $_POST["totalE"]; 
$banco = $_POST["banco"];
$now = date_create()->format('Y-m-d H:i:s');

$sql = "INSERT INTO egresos(nombreEgreso,banco,cantidad,costo,totalEgreso,fecha) VALUES('$nombreE','$banco','$cantidad','$costo','$totalE','$now')";
$query = $conn->prepare($sql);
$query->execute();

if($query){
    echo "Egreso guardado";
    echo "<script>alert('Egreso registrado correctamente'); location.href='../index.php'</script>";
}else{
    echo "Error al guardar egreso";
}

echo "nombre egresp $nombreE, cantidad: $cantidad, costo: $costo, total egreso $totalE ";

?>