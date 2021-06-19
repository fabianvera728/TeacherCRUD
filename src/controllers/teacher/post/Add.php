<?php

use Teacher\Teacher;
use TeacherDAO\TeacherDAO;
require_once('./src/dao/teacher/TeacherDAO.php');
require_once('./src/models/teacher/Teacher.php');
  
//require_once('./public/views/teacher/Edit.php');

if(isset($_POST['fusername'])){
  $teacherDAO = new TeacherDAO();
  $photo = $_POST['fphoto'];
  if( $photo == '' ){
    $photo = "https://image.flaticon.com/icons/png/512/147/147144.png";
  }
  $teacher = new Teacher(
    $_POST['fid'],
    $_POST['fusername'],
    $_POST['flastname'],
    $photo,
    $_POST['fgender'],
    $_POST['fbirthdate'],
    $_POST['fcontracttype']);

  echo $teacherDAO->addTeacher($teacher);
  //require_once('./src/controllers/teacher/List.php');
  header("Location: /teacher/list");
  echo "Validate";
}


?>
