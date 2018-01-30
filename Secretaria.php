<?php
require_once 'Funcionario.php';

// extends -> É  UM
class Secretaria extends Funcionario
{
  public $ramal;


  public function calculaBonificacao()
  {
    //return $this->salario * self::$percentualDoBonus + 10;
    return parent::calculaBonificacao() +  1000;
  }
}
