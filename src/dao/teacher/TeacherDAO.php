<?php

namespace TeacherDAO;
use PDO;
use ConnectionDB\ConnectionDB;
use Exception;
use Teacher\Teacher;
use TeacherInterface\TeacherInterface;
require_once ('./src/interfaces/teacher/TeacherInterface.php');
require_once ('./src/models/teacher/Teacher.php');
require_once ('./src/services/ConectionDB.php');

//use TeacherInterface\TeacherInterface;

//use TeacherInterface;

/**
 * Class TeacherDAO
 * @author fabian vera
 */
class TeacherDAO implements TeacherInterface
{
  /**
   * @param 
   */
  private PDO $database;
  private ConnectionDB $connection;
  public function __construct()
  {
    $this->connection = new  ConnectionDB();
    $this->database = $this->connection->getDatabase();
  }
    
  public function getTeachers(){
    $sql = "select * from teacher";
    $teachers = array();
    foreach ($this->database->query($sql) as $value) {
      # code...
      $teacher = new Teacher($value['id'],
        $value['fullname'],
        $value['lastname'],
        $value['photo'],
        $value['gender'],
        $value['birthdate'],
        $value['contracttype']);
      $teachers[] = $teacher;
    }
    return $teachers;
  }
  
  public function getTeacher($id){
    $sql = "select * from teacher where id='".$id."'";
    $teachers = array();
    foreach ($this->database->query($sql) as $value) {
      # code...
      $teacher = new Teacher($value['id'],
        $value['fullname'],
        $value['lastname'],
        $value['photo'],
        $value['gender'],
        $value['birthdate'],
        $value['contracttype']);
      $teachers[] = $teacher;
    }
    return $teachers[0];
  }

  public function deleteTeacher($id){
    $sql = "delete from teacher where id=".$id;
    try {
    $this->database->query($sql);
      return true;  
    } catch (Exception $e) {
      //throw $th;
      return false;
    }
  } 

  public function editTeacher($teacher){
    $sql = "update teacher set"
      ." fullname='".$teacher->getFullName()."',"
      ." lastname='".$teacher->getLastName()."',"
      ." photo='".$teacher->getPhoto()."',"
      ." gender=".$teacher->getGender().","
      ." birthdate='".$teacher->getBirthdate()."',"
      ." contracttype=".$teacher->getContractType()
      ." where id=".$teacher->getId().";";
    try {
      $this->database->query($sql); 
      return true;
    } catch (Exception $e) {
      print_r("wilmer");
      echo $e;
      return false;
    }
  }

  public function addTeacher($teacher){
    $sql = "insert into teacher (id, fullname, lastname, photo, gender, birthdate, contracttype) values("
      .$teacher->getId().", '"
      .$teacher->getFullName()."', '"
      .$teacher->getLastName()."', '"
      .$teacher->getPhoto()."', "
      .$teacher->getGender().", '"
      .$teacher->getBirthdate()."', "
      .$teacher->getContractType().");";
    try {
      $this->database->query($sql); 
      return true;
    } catch (Exception $e) {
      echo $e;
      return false;
    }
  }
}

?>
