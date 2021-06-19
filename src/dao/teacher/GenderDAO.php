<?php

namespace GenderDAO;

use GenderInterface\GenderInterface;
use PDO;
use ConnectionDB\ConnectionDB;
use Gender;

require_once ('./src/services/ConectionDB.php');
require_once ('./src/interfaces/teacher/GenderInterface.php');
require_once ('./src/models/teacher/Gender.php');
/**
 * Class GenderDAO
 * @author yourname
 */
class GenderDAO implements GenderInterface
{ 
  private PDO $database;
  private ConnectionDB $connection;
  /** 
   * @param 
   */ 
  public function __construct()
  {
    $this->connection = new ConnectionDB();
    $this->database = $this->connection->getDatabase();
  }
  public function getGender($id){
    $sql = "select * from gender where id=".$id;
    $genders = array();
    foreach ($this->database->query($sql) as $gen) {
      $gender = new Gender($gen['id'],$gen['name']);
      $genders[] = $gender;
    }
    return $genders[0];
  }
  public function getGenders(){
    $sql = "select * from gender";
    $genders = array();
    foreach ($this->database->query($sql) as $gen) {
      $gender = new Gender($gen['id'],$gen['name']);
      $genders[] = $gender;
    }
    return $genders;
  }
}

?>
