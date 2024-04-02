<?php
	class Funcionario extends pessoa
	{
		public function __construct(private string $cargo = "", $nome, $cpf)
		{
			parent:: __construct($nome, $cpf);
		}
		
		
		public function getCargo()
		{
			return $this->cargo;
		}
		
	}
?>