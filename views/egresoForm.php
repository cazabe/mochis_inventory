<?php 
include "../templates/nav.php"
?>

<div class="container"> 


<h1 class="mt-4">Crear Egreso</h1>

<form method="POST" action="../controller/egresoC.php">
  <div class="form-group row mt-5">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre del egreso:</label>
    <div class="col-sm-10">
      <input type="text" name="nombreE" class="form-control" id="inputEmail3" placeholder="Ingresa nombre del cliente">
    </div>
  </div>

  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Banco:</label>
    <div class="col-sm-10">
    <select class="form-control" id="banco" name="banco">
      <option>Escoja...</option>
      <option value="pichincha">Pichincha</option>
      <option value="produbanco">Produbanco</option>
    </select>
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cantidad:</label>
    <div class="col-sm-10">
      <input type="number" name="cantidad" class="form-control" id="cantidad" step=".01" placeholder="Ingrese lo que se cobro de envio">
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Costo:</label>
    <div class="col-sm-10">
      <input type="number" name="costo" class="form-control" id="costo" step=".01" placeholder="costo del producto o servicio">
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Total Egreso:</label>
    <div class="col-sm-10">
      <input type="number" name="totalE" class="form-control" id="total" step=".01" placeholder="Total egreso">
    </div>
  </div>

  

  <div class="form-group row mt-5">
    <div class="col-sm-10 marginb">
      <button type="submit" class="btn btn-primary">Guardar egreso</button>
    </div>
  </div>
</form>
</div>


<?php 
include "../templates/footer.php"
?>

<script>

console.log("funcionando js");


$( "#costo" ).keyup(function() {
  let cant = $("#cantidad").val();
  let cost = $("#costo").val();
  const total = cant * cost; 
  $("#total").val(total);
});

</script>