<?php
require_once "DatabaseLayer.php";

class User
{
  private $db;

  public function __construct()
  {
    $this->db = $db = DatabaseLayer::getConnection("MySqlProvider");
    print_r($db->execute("SELECT * FROM usuarios WHERE  username = ?",array("aurbinas")));
    //echo($db->executeScalar("SELECT count(*) FROM users WHERE active=?",array(true)));
  }
}

$user = new User();
?>
