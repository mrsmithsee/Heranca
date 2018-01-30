<?php
require 'Gerente.php';
require 'Secretaria.php';
require 'Telefonista.php';

$gerente = new Gerente();
$gerente->nome = "Maria";
$gerente->matricula = 56;
$gerente->salario = 30000;
$gerente->usuario = "maria.dobem";
$gerente->senha = 1234;

echo PHP_EOL . "Nome Gerente: $gerente->nome" . PHP_EOL;
echo "Matricula: $gerente->matricula" . PHP_EOL;
echo "Salario: $gerente->salario" . PHP_EOL;
echo "Usuario: $gerente->usuario" . PHP_EOL;
echo "Senha: $gerente->senha" . PHP_EOL;
echo "Bonificação: " . $gerente->calculaBonificacao(). PHP_EOL . PHP_EOL;

$sec = new Secretaria();
$sec->nome = "Paulo";
$sec->matricula = 34;
$sec->salario = 8000;
$sec->ramal = 6574;

echo "Nome Secretaria: $sec->nome" . PHP_EOL;
echo "Matricula: $sec->matricula" . PHP_EOL;
echo "Salario: $sec->salario" . PHP_EOL;
echo "Ramal: $sec->ramal" . PHP_EOL;
echo "Bonificação: " . $sec ->calculaBonificacao(). PHP_EOL . PHP_EOL;

$tel = new Telefonista();
$tel->nome = "Flavia";
$tel->matricula = 64;
$tel->salario = 5000;
$tel->estacaoDeTrabalho = "ET342";

echo "Nome Telefonista: $tel->nome" . PHP_EOL;
echo "Matricula: $tel->matricula" . PHP_EOL;
echo "Salario: $tel->salario" . PHP_EOL;
echo "Estacao de Trabalho: $tel->estacaoDeTrabalho" . PHP_EOL;
echo "Bonificação: " . $tel->calculaBonificacao(). PHP_EOL . PHP_EOL;
