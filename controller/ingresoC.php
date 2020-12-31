<?php   
include '../model/bd.php';

$cliente = $_POST["cliente"];
$caja = $_POST["caja"];
$envio = $_POST["envio"];
$cobroC = $_POST["cobroC"];
$total = $_POST["totalIn"];

$sql = "INSERT INTO ingresos(nombreIngreso,cajaMochi,envio,venta,totalIngreso) VALUES('$cliente','$caja','$envio','$cobroC','$total')";
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