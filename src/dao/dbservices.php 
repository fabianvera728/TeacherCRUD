<?php 

class Service {

  private $service;
  private $db;

  public function __construct()
  {
    $this->service = array();
    try {
      //code...
      $this->db = new PDO('mysql:host=localhost;port=3306;dbname=docenteCrud','root','fhvera2020');
    } catch (\Throwable $th) {
      //throw $th;
      echo 'error';
    }
  }

  public function setNames(){
    return $this->db->query("SET NAMES 'utf8'");
  }

  /**
   * undocumented function
   *
   * @return void
   */
  public function getService()
  {
    $this->setNames();
    $sql = "select * from teacher";
    foreach ($this->db->query($sql) as $value) {
      # code...
      $value['tea_contracttype'] = $this->getContractType($value['tea_contracttype']);
      $this->service[] = $value;
    }
    return $this->service;
    $this->db = null;
  }
  
  public function getTeacher($id){
    $this->setNames();
    $teacher = array();
    $sql = "select * from teacher where tea_cod=".$id;
    foreach ($this->db->query($sql) as $value) {
      $teacher[] = $value;
    }
    return $teacher[0];
  }
  
  public function deleteTeacher($id){
    $this->setNames();
    $sql = "delete from teacher where tea_cod=".$id;
    $this->db->query($sql);
  }

  public function getContractTypes(){
    $this->setNames();
    $sql = "select * from contracttype";
    foreach ($this->db->query($sql) as $value) {
      $this->service[] = $value;
    }
    return $this->service;
    $this->db =null;
  }

  public function getContractType($id){
    $this->setNames();
    $types = array();
    $sql = "select ctt_name from contracttype where ctt_id=".$id;
    foreach ($this->db->query($sql) as $value) {
      $types[] = $value;
    }
    return $types[0]['ctt_name'];
  }

  public function getDato(){
    return "holamundo";
  }

}

?>
