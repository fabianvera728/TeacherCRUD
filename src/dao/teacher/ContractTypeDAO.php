<?php

namespace ContractTypeDAO;

use PDO;
use ConnectionDB\ConnectionDB;
use ContractType;
use ContractTypeInterface\ContractTypeInterface;
require_once ('./src/interfaces/teacher/ContractTypeInterface.php');
require_once ('./src/services/ConectionDB.php');
require_once ('./src/models/teacher/ContractType.php');
/**
 * Class ContractTypeDAO
 * @author yourname
 */
class ContractTypeDAO implements ContractTypeInterface
{
  private PDO $database;
  private ConnectionDB $connection;
  
  /**
   * @param 
   */
  public function __construct()
  {
    $this->connection = new ConnectionDB();
    $this->database = $this->connection->getDatabase();
  }
  
  public function getContractType($id)
  {
    $sql = "select * from contracttype where id=".$id;
    $contracttypes = array();
    foreach ($this->database->query($sql) as $contract) {
      $contracttype = new ContractType($contract['id'],$contract['name']);
      $contracttypes[] = $contracttype;
    }
    return $contracttypes[0];
  }

  public function getContractTypes()
  {
    $sql = "select * from contracttype";
    $contracttypes = array();
    foreach ($this->database->query($sql) as $contract) {
      $contracttype = new ContractType($contract['id'],$contract['name']);
      $contracttypes[] = $contracttype;
    }
    return $contracttypes;
  }

} 

?>
