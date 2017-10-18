<?php
require_once "DatabaseLayer.php";

class estudiante
{
  private $carnet;
  private $nombre;
  private $img;
  private $apellido;

  public function __construct()
  {
    $this->db = $db = DatabaseLayer::getConnection("MySqlProvider");

    $datos = $db->execute("SELECT * FROM estudiantes WHERE pnombre like ?",array($user));

    if (count($datos)>0)
    {
      $this->username = $datos[0]["username"];
      $this->pwd = $datos[0]["password"];
    }
    else {
      echo "No existen datos";
    }
  }
}
