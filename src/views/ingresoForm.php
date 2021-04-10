<?php 
include "../templates/nav.php"
?>

<div class="container"> 

<div class="mt-4">
<h1>Crear Ingreso</h1>
</div>
<form method="POST" action="../controller/ingresoC.php">

  <div class="form-group row mt-5">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre cliente:</label>
    <div class="col-sm-10">
      <input type="text" name="cliente" class="form-control" id="inputEmail3" placeholder="Ingresa nombre del cliente">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Sector:</label>
    <div class="col-sm-10">
      <input type="text" name="sector" class="form-control" id="inputEmail3" placeholder="Ingresa el sector de la entrega">
    </div>
  </div>
  
  <div class="form-group row mt-4">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Forma de pago:</label>
    <div class="col-sm-10">
    <select class="form-control" id="banco" name="banco">
      <option>Escoja...</option>
      <option value="pichincha">Pichincha</option>
      <option value="produbanco">Produbanco</option>
      <option value="efectivo">Efectivo</option>
    </select>
    </div>
  </div>
  
  <fieldset class="form-group mt-4">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Seleccione la caja comprada:</legend>
      <div class="col-sm-10">
      
      <div class="form-check">
          <input class="form-check-input" type="radio" name="caja" id="caja1" value="caja de 1">
          <label class="form-check-label" for="gridRadios1">
            Caja de 1
          </label>
        </div>

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

  <fieldset class="form-group mt-4">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Seleccione la cantidad del sabor:</legend>

      <div class="row">

      <div class="col-md-3">
      <div>
      <label class="col-form-label">Love potion:</label>
      </div>
      <input class="form-control" type="number" name="lp">
      </div>

      <div class="col-md-3">
      <div>
      <label class="col-form-label">polar:</label>
      </div>
      <input class="form-control" type="number" name="po">
      </div>

      <div class="col-md-3">
      <div>
      <label class="col-form-label">Chooocolate:</label>
      </div>
      <input class="form-control" type="number" name="cho">
      </div>

      <div class="col-md-3">
      <div>
      <label class="col-form-label">Sunshine:</label>
      </div>
      <input class="form-control" type="number" name="sun">
      </div>

      <div class="col-md-3">
      <div>
      <label class="col-form-label">Kissme:</label>
      </div>
      <input class="form-control" type="number" name="ki">
      </div>

      <div class="col-md-3">
      <div>
      <label class="col-form-label">Beachy:</label>
      </div>
      <input class="form-control" type="number" name="be">
      </div>

      <div class="col-md-3">
      <div>
      <label class="col-form-label">Konnichiwa:</label>
      </div>
      <input class="form-control" type="number" name="ko">
      </div>

      <div class="col-md-3">
      <div>
      <label class="col-form-label">Caramel coffee:</label>
      </div>
      <input class="form-control" type="number" name="cc">
      </div>

      <div class="col-md-3">
      <div>
      <label class="col-form-label">Cookie monster:</label>
      </div>
      <input class="form-control" type="number" name="cm">
      </div>

      <div class="col-md-3">
      <div>
      <label class="col-form-label">Sabor de temporada:</label>
      </div>
      <input class="form-control" type="number" name="temp">
      </div>

      </div>
      
      </div>
  </fieldset>

  <div class="form-group row mt-4">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Adicional:</label>
    <div class="col-sm-10">
      <input type="number" name="adicional" class="form-control" id="adicional" step=".01" placeholder="Ingrese el valor adicional">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cobro envio:</label>
    <div class="col-sm-10">
      <input type="number" name="envio" class="form-control" id="envio" step=".01" placeholder="Ingrese lo que se cobro de envio">
    </div>
  </div>

  <!-- guardar cantidad en base de datos -->
  <div class="form-group row mt-4">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cantidad:</label> 
    <div class="col-sm-10">
      <input type="number" name="cantidad" class="form-control" id="cantidad" step=".01" placeholder="Ingrese la cantidad">
    </div>
  </div>


  <div class="form-group row mt-4">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cobro cliente:</label>
    <div class="col-sm-10">
      <input type="number" name="cobroC" class="form-control" id="cobroCliente"  step=".01" placeholder="cobro al cliente">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Total:</label>
    <div class="col-sm-10">
      <input type="number" name="totalIn" class="form-control" id="totalI"  step=".01" placeholder="Total ingreso">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Comentario extra:</label>
    <div class="col-sm-10">
      <input type="text" name="comentario" class="form-control" id="comentario" placeholder="Escriba un comentario de ser necesario">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Hora de entrega:</label>
    <div class="col-sm-2">
      <input type="time" name="timeE" class="form-control" id="timeE">
    </div>
  </div>

  

  <div class="form-group row marginb">
    <div class="col-sm-10 marginb">
      <button type="submit" class="btn btn-primary">Guardar ingreso</button>
    </div>
  </div>

</form>
</div>
<?php 
include "../templates/footer.php"
?>

<script>


/*agreagar caja de uno*/

$( "#caja1" ).click(function() {
  $("#cobroCliente").val(1.50);
});

$( "#caja3" ).click(function() {
  $("#cobroCliente").val(4);
});

$( "#caja6" ).click(function() {
  $("#cobroCliente").val(8);
});

$( "#caja9" ).click(function() {
  $("#cobroCliente").val(12);
});

$( "#cantidad" ).keyup(function() {
  
  let cobroC = parseFloat($("#cobroCliente").val());
  let adicional = parseFloat($("#adicional").val());
  if(isNaN(adicional)){
    adicional = 0;
  }
  let envio = parseFloat($("#envio").val());
  if(isNaN(envio)){
    envio = 0;
  }
  let cant = parseFloat($("#cantidad").val());
  const total = (cobroC * cant) + envio + adicional; 
  $("#totalI").val(total.toFixed(2));
});

</script>