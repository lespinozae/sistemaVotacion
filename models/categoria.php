<?php
require_once "DatabaseLayer.php";

class categoria
{
  private $cod;
  private $descripcion;
  private $todo = [];

  public function __construct()
  {
    $this->db = $db = DatabaseLayer::getConnection("MySqlProvider");

    $datos = $db->execute("SELECT * FROM categorias WHERE  codCategoria != ?",array(-1));


    if (count($datos)>0)
    {
      for ($i=0; $i < count($datos); $i++) {
        $todo = $datos;
      }
    }
    else {
      echo "No existen datos";
    }
  }

  public function todo()
  {
    return $this->todo;
  }
}
