<?php

require_once('./public/index.php');

if ((isset($_POST['username'])) && ($_POST['username'] != '') && (isset($_POST['password'])) && ($_POST['password'] != '')) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  echo "username: ".$username;
  echo "   password: ".$password;
    //include "models/modelo.php";
    //$nuevo = new Service();
    //$asd = $nuevo->setServicio($_POST['nombre'], $_POST['precio']);
}
?>
