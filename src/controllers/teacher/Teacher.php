<?php

namespace controllers\get\Teacher;

use ContractTypeDAO\ContractTypeDAO;
use GenderDAO\GenderDAO;
use TeacherDAO\TeacherDAO;
use Teacher\Teacher;

require_once('./src/dao/teacher/TeacherDAO.php');
require_once('./src/dao/teacher/ContractTypeDAO.php');
require_once('./src/dao/teacher/GenderDAO.php');
require_once('./src/models/teacher/Teacher.php');

class TeacherCon
{

  /**
   * @param 
   */
  public function __construct()
  {
  }

  public static function list()
  {
    $teacherDAO = new TeacherDAO();
    $teachers = $teacherDAO->getTeachers();
    $contracttype = new ContractTypeDAO();
    $gender = new GenderDAO();
    require_once('./public/views/teacher/list/List.php');
  }

  public static function addGet()
  {
    $teacherDAO = new TeacherDAO();
    $contract = new ContractTypeDAO();
    $contracttypes = $contract->getContractTypes();
    $genderDAO = new GenderDAO();
    $genders = $genderDAO->getGenders();
    require_once('./public/views/teacher/add/Add.php');
  }

  public static function addPost()
  {
    if (isset($_POST['fname'])) {
      $teacherDAO = new TeacherDAO();
      $photo = self::saveImage($_FILES['fphoto']);
      if ($photo == '') {
        $photo = "https://image.flaticon.com/icons/png/512/147/147144.png";
      }
      $teacher = new Teacher(
        $_POST['fid'],
        $_POST['fname'],
        $_POST['flastname'],
        $photo,
        $_POST['fgender'],
        $_POST['fbirthdate'],
        $_POST['fcontracttype']
      );

      echo $teacherDAO->addTeacher($teacher);
      header("Location: /teacher/list");
      echo "Validate";
    }
  }

  public static function updateGet($tea_id)
  {
    $teacherDAO = new TeacherDAO();
    $teacher = $teacherDAO->getTeacher($tea_id);
    $contract = new ContractTypeDAO();
    $contracttypes = $contract->getContractTypes();
    $genderDAO = new GenderDAO();
    $genders = $genderDAO->getGenders();
    require_once('./public/views/teacher/edit/Edit.php');
  }

  public static function updatePost($tea_id)
  {
    $dirprincipal = getcwd();
    $dirphotos = $dirprincipal . "/resources/teacher/photos/";
    if (isset($_POST['btnregister'])) {
      $teacherDAO = new TeacherDAO();
      $photo = self::saveImage($_FILES['fphotoprofile']);
      if ($photo == '') {
        $photo = $_POST['fdefaultphotot'];
        echo $photo;
        echo "error";
      }
      $teacher = new Teacher(
        $tea_id,
        $_POST['fname'],
        $_POST['flastname'],
        $photo,
        $_POST['fgender'],
        $_POST['fbirthdate'],
        $_POST['fcontracttype']
      );
      $teacherDAO->editTeacher($teacher);
      //echo $photo;
      header("Location: /teacher/list");
    }
  }

  public static function delete($delete_id)
  {
    if ((isset($delete_id) and $delete_id != '')) {
      $teacherDAO = new TeacherDAO();
      $teacherDAO->deleteTeacher($delete_id);
      header("Location: /teacher/list");
    }
  }

  public static function detail($tea_id)
  {
    $teacherDAO = new TeacherDAO();
    $teacher = $teacherDAO->getTeacher($tea_id);
    $contract = new ContractTypeDAO();
    $contracttypes = $contract->getContractTypes();
    $genderDAO = new GenderDAO();
    $genders = $genderDAO->getGenders();
    require_once('./public/views/teacher/detail/Detail.php');
  }

  public static function saveImage($imagefile)
  {
    $dirprincipal = getcwd();
    $dirphotos = "/resources/teacher/photos/";
    $dirabsolute = $dirprincipal . $dirphotos;
    $fileTmpPath = $imagefile['tmp_name'];
    $fileName = $imagefile['name'];
    if ($fileName != '') {
      $fileNameCmps = explode(".", $fileName);
      $fileExtension = strtolower(end($fileNameCmps));
      $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
      $dest_path = $dirabsolute . $newFileName;
      if (move_uploaded_file($fileTmpPath, $dest_path)) {
        echo "Movida";
      }
      $photo = $dirphotos.$newFileName;
      return $photo;
    }else{
      return $photo = '';
    }
  }

  public static function search()
  {
    if (isset($_POST['searchname'])) {
      $name = $_POST['searchname'];
      $teacherDAO = new TeacherDAO();
      $teachers = $teacherDAO->getTeachersByName($name);
      $contracttype = new ContractTypeDAO();
      $gender = new GenderDAO();
      require_once('./public/views/teacher/list/List.php');
      //header("Location: /teacher/list");
    }
  }

}
