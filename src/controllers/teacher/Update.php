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
    $photo = $_POST['fdefaultphoto'];
  }
  $teacher = new Teacher(
    $tea_id,
    $_POST['fusername'],
    $_POST['flastname'],
    $photo,
    $_POST['fgender'],
    $_POST['fbirthdate'],
    $_POST['fcontracttype']);

  echo $teacherDAO->editTeacher($teacher);
  //require_once('./src/controllers/teacher/List.php');
  header("Location: /teacher/list");
  echo "Success edit";
}



?>
