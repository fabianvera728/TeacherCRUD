<?php

namespace Auth;

use User\User;
use UserDao\UserDao;
use GenderDAO\GenderDAO;
require_once('./src/dao/teacher/GenderDAO.php');
require_once('./src/dao/user/UserDAO.php');

/**
 * Class Auth
 * @author yourname
 */
class Auth{

  /**
   * @param 
   */
  public function __construct() {  }

  public static function login(){
    require_once('./public/views/auth/login/Login.php');
  }

  public static function vlogin(){
    if ((isset($_POST['femail'])) && ($_POST['femail'] != '') && (isset($_POST['fpassword'])) && ($_POST['fpassword'] != '')) {
      $email = $_POST['femail'];
      $password = $_POST['fpassword'];
      $userdao = new UserDao();
      echo $email;
      echo $password;
      $res = $userdao->login($email,$password);
      echo "funciona";
      if($res){
        //echo "funciona";
        header('Location: /home');
      }else{
        header('Location: /login');
      }
     
    }
  }

  public static function singUp(){
    $genderDAO = new GenderDAO();
    $genders = $genderDAO->getGenders();
    require_once('./public/views/auth/sing-up/SingUp.php');
  }

  public static function vSingUp(){
    if (isset($_POST['femail']) && isset($_POST['fname']) &&
        isset($_POST['flastname']) && isset($_POST['fgender']) &&
        isset($_POST['fbirthdate']) && isset($_POST['fpassword']) &&
        isset($_POST['fcpassword']) && 
        $_POST['fpassword'] == $_POST['fcpassword']){
          $photo = $_POST['fphoto'];
          if ($photo == '') {
            $photo = "https://image.flaticon.com/icons/png/512/147/147144.png";
          }
          
        $user = new User(
          $_POST['femail'],
          $_POST['fname'],
          $_POST['flastname'],
          $photo,
          $_POST['fgender'],
          $_POST['fbirthdate'],
          false,
          $_POST['fpassword']);
        $userdao = new UserDao();
        $userdao->addUser($user);
        $res = $userdao->login($user->getEmail(),$_POST['fpassword']);
      if($res){
        header('Location: /home');
      }else{
        header('Location: /sing-up');
      }
    }else{
      echo "hasta aqui mal";
      return false;
    }
  }

  public static function logout(){
    session_start();
    $_SESSION = array();
    session_destroy();
    header('Location: /login');
  }
}

?>
