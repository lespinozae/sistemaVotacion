<?php
require_once "headerp.php";
 ?>
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="app.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Nombre del proyecto:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="nproyect">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Imagen:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="pwd" placeholder="Enter password" name="img">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Categoria:</label>
    <div class="col-sm-10">
      <select name="cat" required>
        <option value=""></option>
      </select>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
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
