<?php   
include '../model/bd.php';
date_default_timezone_set("UTC");

$cliente = $_POST["cliente"];
$sector = $_POST["sector"];
$banco = $_POST["banco"];
$caja = $_POST["caja"];
$lp = $_POST["lp"];
$po = $_POST["po"];
$cho = $_POST["cho"];
$sun = $_POST["sun"];
$ki = $_POST["ki"];
$be = $_POST["be"];
$ko = $_POST["ko"];
$cc = $_POST["cc"];
$cm = $_POST["cm"];
$temp = $_POST["temp"];
$adicional = $_POST["adicional"];
$cantidad = $_POST["cantidad"];
$envio = $_POST["envio"];
$cobroC = $_POST["cobroC"];
$total = $_POST["totalIn"];
$comentario = $_POST["comentario"];
$timeE = $_POST["timeE"];


$sql = "INSERT INTO ingresos(nombreIngreso,sector,banco,cajaMochi,lp,po,cho,sun,ki,be,ko,cc,cm,temp,adicional,cantidad,envio,venta,totalIngreso,comentario,hora_entrega) 
VALUES('$cliente','$sector','$banco','$caja','$lp','$po','$cho','$sun','$ki','$be','$ko','$cc','$cm','$temp','$adicional','$cantidad','$envio','$cobroC','$total','$comentario','$timeE')";
$query = $conn->prepare($sql);
$query->execute();

if($query){
    echo "Ingreso guardado";
    echo "<script>alert('Ingreso registrado correctamente'); location.href='../views/ingresoForm.php'</script>";
    
}else{
    echo "Error al guardar ingreso";
    echo "<script>alert('Ingreso registrado correctamente');</script>";
}

?>