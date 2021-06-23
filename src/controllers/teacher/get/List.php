<?php

use ContractTypeDAO\ContractTypeDAO;
use GenderDAO\GenderDAO;
use TeacherDAO\TeacherDAO;

require_once('./src/dao/teacher/TeacherDAO.php');
require_once('./src/dao/teacher/ContractTypeDAO.php');
require './src/dao/teacher/GenderDAO.php';
$teacherDAO = new TeacherDAO();
$teachers = $teacherDAO->getTeachers();
$contracttype = new ContractTypeDAO();
$gender = new GenderDAO();
require_once('./public/views/teacher/list/List.php');

/*
if ((isset($_POST['id'])) && ($_POST['id'] != '') ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once('../models/dbservices.php');
    $service = new Service();
    $tea_id = $_POST['id'];
    $service->deleteTeacher($tea_id);
    $datos = $service->getService();
    require_once('./public/views/listar.php');
}
*/

