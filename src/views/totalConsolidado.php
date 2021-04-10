<?php 
include "../templates/nav.php";
include '../model/bd.php';
$sql = "SELECT i.totalIngreso, e.totalEgreso FROM ingresos i, egresos e";
$query = $conn->prepare($sql);
$query->execute();
$res = $query->fetchAll();
?>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <table class="width:100%">
                <tr>
                    <td>
                        <h3>Tabla de Consolidado total</h3>
                    </td>
            
                </tr>
            </table>
        </div>
        <div class="body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Total ingreso</th>
                        <th>Total egreso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $total = 0;
                    foreach ($res as $ingreso) { ?>
                     <?php $total =  $ingreso['totalIngreso'] - $ingreso['totalEgreso']  ?>
                        <tr>
                            <td><?php echo $ingreso['totalIngreso'] ?></td>
                            <td><?php echo $ingreso['totalEgreso'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex bg-secondary marginb">
    <div class="p-2 mr-auto text-white"><strong><p>Total:</p></strong></div>
    <div class="p-2 mr-5 text-white"><strong><p><?php echo $total ?></p></strong></div>
    </div>
</div>

<?php 
include "../templates/footer.php"
?>
