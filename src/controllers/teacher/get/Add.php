<?php 

use ContractTypeDAO\ContractTypeDAO;
use GenderDAO\GenderDAO;
use TeacherDAO\TeacherDAO;
require_once('./src/dao/teacher/TeacherDAO.php');
require_once('./src/dao/teacher/ContractTypeDAO.php');
require_once('./src/dao/teacher/GenderDAO.php');

$teacherDAO = new TeacherDAO();
$contract = new ContractTypeDAO();
$contracttypes = $contract->getContractTypes();
$genderDAO = new GenderDAO();
$genders = $genderDAO->getGenders();
require_once('./public/views/teacher/add/Add.php');
 
?>
