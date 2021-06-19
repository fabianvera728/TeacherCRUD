<?php

if ((isset($delete_id) and $delete_id != '')){
    require_once('./src/models/dbservices.php');
    $service = new Service();
    $service->deleteTeacher($delete_id);
    $datos = $service->getService();
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

