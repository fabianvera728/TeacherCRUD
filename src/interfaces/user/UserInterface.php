<?php

namespace UserInterface;

/**
 * Interface UserInterface
 * @author yourname
 */
interface UserInterface{

  public function getUser($username);
  public function login($username,$password);
  public function addUser($user);
}
?>
