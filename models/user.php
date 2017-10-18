<?php
require_once "DatabaseLayer.php";

class User
{
  private $db;
  private $id;
  private $username;
  private $pwd;

  public function __construct($user)
  {
    $this->db = $db = DatabaseLayer::getConnection("MySqlProvider");
<<<<<<< HEAD
    print_r($db->execute("SELECT * FROM usuarios WHERE  username = ?",array("aurbinas")));
    //echo($db->executeScalar("SELECT count(*) FROM users WHERE active=?",array(true)));


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

  public function getAcceso($pwd){
    $pwd=md5($pwd);
    if ($this->pwd == $pwd)
    {
      echo "<script type='text/javascript'>
            window.location='panel.php';
          </script>";
    }
    else {
      echo "Clave invalida";
    }
>>>>>>> 786674ecf2aac1715bd98afe995b0c8a37d741b0
  }
}


?>
