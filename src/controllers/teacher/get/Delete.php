<?php
use Teacher\Teacher;
use TeacherDAO\TeacherDAO;
require_once('./src/dao/teacher/TeacherDAO.php');
require_once('./src/models/teacher/Teacher.php');

if ((isset($delete_id) and $delete_id != '')){
    $teacherDAO = new TeacherDAO();
    $teacherDAO->deleteTeacher($delete_id);
    header("Location: /teacher/list");
}

/*
<?php
/* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición 
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'mypage.php';
header("Location: http://$host$uri/$extra");
exit;?>
*/


?>

