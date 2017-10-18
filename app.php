<?php
require_once "headerp.php";
require_once "models/app.php";

$app = new app();

 ?>
 <h2>Agregar proyecto</h2>
 <br />
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="app.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Nombre del proyecto:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" required id="email" placeholder="Nombre del proyecto" name="nproyect">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Imagen:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" required id="pwd" placeholder="Imagen" name="img">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Categoria:</label>
    <div class="control-label col-sm-10" class="col-sm-10">
      <select name="cat" class="form-control" style="width: 100%" required>
        <option value="">Seleccione una opci&oacute;n</option>
        <?php
        $cat = $app->categoria()->todo();
        print($cat);
        ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>



<?php
require_once "footerp.php";
 ?>
