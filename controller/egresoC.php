<?php 
include '../model/bd.php';

$nombreE = $_POST["nombreE"];
$cantidad = $_POST["cantidad"];
$costo = $_POST["costo"];
$totalE = $_POST["totalE"]; 
$banco = $_POST["banco"];

$sql = "INSERT INTO egresos(nombreEgreso,banco,cantidad,costo,totalEgreso) VALUES('$nombreE','$banco','$cantidad','$costo','$totalE')";
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