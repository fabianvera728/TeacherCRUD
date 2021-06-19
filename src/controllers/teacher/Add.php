<?php 

use ContractTypeDAO\ContractTypeDAO;
use TeacherDAO\TeacherDAO;
require_once('./src/dao/teacher/TeacherDAO.php');
require_once('./src/dao/teacher/ContractTypeDAO.php');

$teacherDAO = new TeacherDAO();
$contract = new ContractTypeDAO();
$contracttypes = $contract->getContractTypes();
require_once('./public/views/teacher/Add.php');
if(isset($_POST['fname']) and $_POST['fname'] != ''){
  echo "Success register";
  header("Location: /teacher/list");
}
 
$teacherDAO = new TeacherDAO();
$teacher = $teacherDAO->getTeacher($tea_id);
$contract = new ContractTypeDAO();
$contracttype = $contract->getContractType($teacher->getContractType());
$contracttypes = $contract->getContractTypes();
require_once('./public/views/teacher/Edit.php');
?>
