<?php
require_once "Pessoa.class.php";
require_once "aluno.class.php";
require_once "Professor.class.php";
require_once "Matricula.class.php";
require_once "Modalidade.class.php";

$professor = new Professor("Renshi", "Yamamoto", "222.666.999-99");
$modalidade = new Modalidade("Karatê", array($professor));
$aluno = new Aluno("21/12/2002", "Carlos da Silva", "888.888.777-00");
$matricula = new Matricula("01/04/2024", $modalidade, $aluno );

echo "<h1>Matricula</h1>";
echo "Data: {$matricula->getData_matricula()}<br>";

echo "<h1>Aluno</h1>";
echo "Nome: {$matricula->getAluno()->getNome()}<br>";
echo "CPF: {$matricula->getAluno()->getCpf()}<br>";
echo "Data de Nascimento: {$matricula->getAluno()->getData_nascimento()}<br>";

echo "<h1>Modalidade</h1>";
echo "Descritivo: {$matricula->getModalidade()->getDescritivo()}<br>";

echo "<h1>Professor</h1>";
echo "Nome: {$matricula->getModalidade()->getProfessor()[0]->getNome()}<br>";
echo "CPF: {$matricula->getModalidade()->getProfessor()[0]->getCpf()}<br>";
echo "Titulo: {$matricula->getModalidade()->getProfessor()[0]->getTitulo()}<br>";
?>