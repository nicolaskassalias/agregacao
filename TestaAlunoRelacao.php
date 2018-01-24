<?php
declare (strict_types=1);
require 'Turma.php';
require 'Aluno.php';
require_once 'lib/Carbon.php';
use Carbon\Carbon;


$turma = new Turma();

$turma->periodo="Manhã";
$turma->serie=5;

$dt = Carbon::createFromDate(1983,10,30);
//$dt="20/05/2016";
$aluno = new Aluno("Mario da Silva",$dt);
// $aluno->nome="Mario";
// $aluno->dataDeNasc = Carbon::createFromDate(1988,10,30);

$aluno->turma =  $turma;

echo "\n\tRelacao de Alunos".PHP_EOL;
echo "\tAluno: $aluno->nome".PHP_EOL;
echo "\tDt nasc: {$aluno->dataDeNasc->format('d/m/y')}".PHP_EOL;
echo "\tPeriodo:  {$aluno->turma->periodo}".PHP_EOL;

 ?>
