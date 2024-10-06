<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form class="form-horizontal" action="nuevo.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="var_matricula">matricula</label>  
  <div class="col-md-4">
  <input id="var_matricula" name="var_matricula" type="text" placeholder="matricula" class="form-control input-md" required="">
  <span class="help-block">formato de matricula son 6 dígitos</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="var_nombre">nombre</label>  
  <div class="col-md-4">
  <input id="var_nombre" name="var_nombre" type="text" placeholder="Nombre completo" class="form-control input-md" required="">
  <span class="help-block">nombre completo</span>  
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="var_carrera">Carrera</label>
  <div class="col-md-4">
    <select id="var_carrera" name="var_carrera" class="form-control" multiple="multiple">
      <option value="1">ITI</option>
      <option value="2">ITMA</option>
      <option value="3">ITEM</option>
      <option value="4">LAG</option>
      <option value="5">LMI</option>
      <option value="6">ISTI</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="botonguardar"></label>
  <div class="col-md-4">
    <button id="botonguardar" name="botonguardar" class="btn btn-default">Guardar</button>
  </div>
</div>

</fieldset>
</form>


</body>
</html>