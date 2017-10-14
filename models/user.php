<?php
require_once "DatabaseLayer.php";

class User
{
  private $db;

  public function __construct()
  {
    $this->db = $db = DatabaseLayer::getConnection("MySqlProvider");
    print_r($db->execute("SELECT cod,username FROM usuarios WHERE  username = ?",array("lmanuel")));
    //echo($db->executeScalar("SELECT count(*) FROM users WHERE active=?",array(true)));
  }
}

$user = new User();
?>
