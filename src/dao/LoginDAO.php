<?php

require('../services/ServiceDB.php');

class LoginDAO{

  private $service;

  /**
   * @param 
   */
  public function __construct()
  {
    $this->service = new Service();
  }

}
?>
