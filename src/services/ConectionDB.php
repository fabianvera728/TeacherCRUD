<?php 

namespace ConnectionDB;

use PDO;

class ConnectionDB {

  private PDO $database;

  public function __construct(){
    try {
      //code...
      $this->database = new PDO('mysql:host=localhost;port=3306;dbname=teacher_Crud','root','fhvera2020');
      $this->setNames();
    } catch (\Exception $th) {
      echo 'error '.$th;
    }
  }
  
  public function setNames(): bool|\PDOStatement
  {
    return $this->database->query("SET NAMES 'utf8'");
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function getDatabase(){
    return $this->database;
  }

}

?>
