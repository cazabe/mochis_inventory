<?php   
include '../model/bd.php';

$cliente = $_POST["cliente"];
$caja = $_POST["caja"];
$envio = $_POST["envio"];
$cobroC = $_POST["cobroC"];
$total = $_POST["totalIn"];
$cantidad = $_POST["cantidad"];
$banco = $_POST["banco"];
$now = date_create()->format('Y-m-d H:i:s');

$sql = "INSERT INTO ingresos(nombreIngreso,banco,cajaMochi,cantidad,envio,venta,totalIngreso,fecha) VALUES('$cliente','$banco','$caja','$cantidad','$envio','$cobroC','$total','$now')";
$query = $conn->prepare($sql);
$query->execute();

if($query){
    echo "Ingreso guardado";
    echo "<script>alert('Ingreso registrado correctamente'); location.href='../index.php'</script>";
    
}else{
    echo "Error al guardar ingreso";
}

echo "cliente $cliente, caja $caja, envio $envio, cobro Cliente $cobroC, total $total";

?>