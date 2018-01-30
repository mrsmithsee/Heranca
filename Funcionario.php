<?php
class Funcionario
{
  public $matricula;
  public $nome;
  public $salario;

  function calculaBonificacao()
  {
     return $this->salario * 0.1;
  }

}
