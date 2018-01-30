<?php

require_once 'Funcionario.php';

// extends -> É  UM
class Gerente extends Funcionario
{
  public $usuario;
  public $senha;

  function calculaBonificacao()
  {
    return $this->salario * 0.6 + 100;
 }
}
