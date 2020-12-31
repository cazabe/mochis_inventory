<?php 
include "../templates/nav.php"
?>

<div class="container"> 

<h1>Crear Ingreso</h1>

<form method="POST" action="../controller/ingresoC.php">
  <div class="form-group row mt-5">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre cliente:</label>
    <div class="col-sm-10">
      <input type="text" name="cliente" class="form-control" id="inputEmail3" placeholder="Ingresa nombre del cliente">
    </div>
  </div>
  
  <fieldset class="form-group mt-5">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Seleccione la caja comprada:</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="caja" id="caja3" value="caja 3">
          <label class="form-check-label" for="gridRadios1">
            Caja 3
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="caja" id="caja6" value="caja 6">
          <label class="form-check-label" for="gridRadios2">
            Caja 6
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="caja" id="caja9" value="caja 9">
          <label class="form-check-label" for="gridRadios3">
            Caja 9
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cobro envio:</label>
    <div class="col-sm-10">
      <input type="number" name="envio" class="form-control" id="envio" step=".01" placeholder="Ingrese lo que se cobro de envio">
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cobro cliente:</label>
    <div class="col-sm-10">
      <input type="number" name="cobroC" class="form-control" id="cobroCliente"  step=".01" placeholder="cobro al cliente">
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Total:</label>
    <div class="col-sm-10">
      <input type="number" name="totalIn" class="form-control" id="totalI"  step=".01" placeholder="Total ingreso">
    </div>
  </div>

  

  <div class="form-group row mt-5">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar ingreso</button>
    </div>
  </div>

</form>
</div>
<?php 
include "../templates/footer.php"
?>

<script>

$( "#caja3" ).click(function() {
  $("#cobroCliente").val(6);
});

$( "#caja6" ).click(function() {
  $("#cobroCliente").val(9);
});

$( "#caja9" ).click(function() {
  $("#cobroCliente").val(12);
});

$( "#envio" ).keyup(function() {
  let cobroC = parseInt($("#cobroCliente").val());
  let envio = parseFloat($("#envio").val());
  const total = envio + cobroC; 
  $("#totalI").val(total);
  console.log(typeof total);
});

</script>