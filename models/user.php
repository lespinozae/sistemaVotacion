<?php
class User()
{
  private $db;

  __construct()
  {
    $this->db = $db = DatabaseLayer::getConnection("MySqlProvider");
    print_r($db->execute("SELECT id,email FROM users WHERE  name like ? LIMIT 20",array("ontuts%")));
    echo($db->executeScalar("SELECT count(*) FROM users WHERE active=?",array(true)));
  }
}
?>
