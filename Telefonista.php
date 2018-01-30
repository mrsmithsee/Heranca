<?php
require_once 'Funcionario.php';

// extends -> É  UM
class Telefonista extends Funcionario
{
  public $estacaoDeTrabalho;
  public function calculaBonificacao()
  {
//    return $this->salario * self::$percentualDoBonus + 10;
    return parent::calculaBonificacao() +  500;
  }

}
