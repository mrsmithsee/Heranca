<?php
class Funcionario
{
  public $matricula;
  public $nome;
  public $salario;
  static public $percentualDoBonus = 0.01;  // esse caso é de classe para poder usar em outros metodos

// colocamos novamente o metodo para usar parent nas classes filhas
// metodo de objeto
  public function calculaBonificacao($percentualDoBonus = 0.01)   //se nao receber valor usara 0.01
  {
    return $this->salario * self::$percentualDoBonus + 500;
  }

// como criamos os metodos nas classes filhas retiramos daqui
//  function calculaBonificacao()
//  {
//     return $this->salario * 0.1;
//  }

}
