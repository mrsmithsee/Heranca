<?php

require_once 'Funcionario.php';

// extends -> É  UM
class Gerente extends Funcionario
{
  public $usuario;
  public $senha;

  function calculaBonificacao()
  {
//    return $this->salario * self::$percentualDoBonus + 100;
// observar que :: é apenas sintaxe, nao tem relação com ser statico no caso nao é, é de objeto
    return parent::calculaBonificacao() +  2000;
 }
}
