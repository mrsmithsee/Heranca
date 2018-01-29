<?php
require 'Gerente.php';

$gerente = new Gerente();
$gerente->nome = "Maria";
$gerente->matricula = 56;
$gerente->salario = 30000;
$gerente->senha = 1234;

echo "Nome Gerente: $gerente->nome" . PHP_EOL;
echo "Matricula: $gerente->matricula" . PHP_EOL;
echo "Salario: $gerente->salario" . PHP_EOL;
echo "Senha: $gerente->senha" . PHP_EOL;
