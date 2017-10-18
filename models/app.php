<?php
require_once "DatabaseLayer.php";
require_once "estudiante.php";
require_once "categoria.php";

class app
{
  private $cod;
  private $nombreProyecto;
  private $img;
  private $estudiante;
  private $categoria;

  public function __construct()
  {
    $this->db = $db = DatabaseLayer::getConnection("MySqlProvider");
    $this->estudiante = new estudiante();
    $this->categoria = new categoria();
    
    $datos = $db->execute("SELECT username, password FROM usuarios WHERE  username = ?",array($user));

    if (count($datos)>0)
    {
      $this->username = $datos[0]["username"];
      $this->pwd = $datos[0]["password"];
    }
    else {
      echo "No existen datos";
    }
  }

  public function categoria()
  {
    return $this->categoria;
  }
}
