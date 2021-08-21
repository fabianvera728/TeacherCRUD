<?php

namespace UserDao;

use ConnectionDB\ConnectionDB;
use Exception;
use PDO;
use User\User;
use UserInterface\UserInterface;

require_once './src/services/ConectionDB.php';
require_once './src/interfaces/user/UserInterface.php';
require_once './src/models/user/User.php';
/**
 * Class UserDao
 * @author yourname
 */
class UserDao implements UserInterface{

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

  public function getUser($email){
    $sql = "select * from user where email='".$email."'";
    $result = array(); 
    foreach ($this->database->query($sql) as $value) {
      $user = new User(
        $value['email'],
        $value['fullname'],
        $value['lastname'],
        $value['photo'],
        $value['gender'],
        $value['birthdate'],
        $value['is_staff'],
        $value['password']);
      $result[] = $user;
    }
    return $result[0];
  }
  public function login($email, $password)
  {
    session_start();
    $user = $this->getUser($email);
    echo $user->getFullName();
    if (!isset($user)){
      echo '<p>fail</p>';
    }else{
      if($password == $user->getPassword()){
        echo "hay sesion";
        $_SESSION['user_id'] = $user->getEmail();
        return true;
      }
    } 
  } 
 
  public function addUser($user){
    $sql = "insert into user (email,fullname, lastname, 
    gender, birthdate, password) values('" 
      .$user->getEmail()."','"
      .$user->getFullName()."', '"
      .$user->getLastName()."',"
      .$user->getGender().", '"
      .$user->getBirthdate()."', '"
      .$user->getPassword()."');";
    try {
      $this->database->query($sql); 
      return true;
    } catch (Exception $e) {
      echo $e;
      echo $sql;
      return false;
    }
  }
}



?>
