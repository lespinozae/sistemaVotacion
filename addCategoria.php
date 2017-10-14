<?php
require_once "header.php";

?>

<div class="alert alert-dark" role="alert">

<form name="frmCategoria" action="addCategoria.php" method="post">
  
 <fieldset class="container">
   <legend class="card rounded-0"><h3>Agregar categorias de concursos</h3></legend>

<div>
  
<label>Nombre de la categoría:</label>
<input type="text" name="ncategoria">

</div>

<div>
  
  <input type="submit" name="enviar" value="Guardar">

</div>



 </fieldset>
</form>

</div>

<?php
require_once "footer.php";
 ?>
