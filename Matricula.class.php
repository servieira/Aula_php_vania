<?php
	class Matricula
	{
		public function __construct(private string $data_matricula = "", private $modalidade = null, private $aluno = null){}
		
		
		public function getData_matricula()
		{
			return $this->data_matricula;
		}

		public function getModalidade()
		{
			return $this->modalidade;
		}
		
		public function getAluno()
		{
			return $this->aluno;
		}
		
	}

	/*O Prof tiago me fez entender muito mais sobre git hub.... sdssdsdd */
?>

