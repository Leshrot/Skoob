<?php
	/**
	* 
	*/
	class Leitor
	{
		private $nome;
		private $apelido;
		private $data_nasc;
		private $sexo;
		private $email;
		private $senha;
		private $UF;

		function __construct($nome='', $apelido='',$data_nasc='', $sexo='', $email='', $senha='', $UF='')
		{
			$this->nome = $nome;
			$this->apelido = $apelido;
			$this->data_nasc = $data_nasc;
			$this->sexo = $sexo;
			$this->email = $email;
			$this->senha = $senha;
			$this->UF = $UF;
		}

		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getApelido(){
			return $this->apelido;
		}
		public function setApelido($apelido){
			$this->apelido = $apelido;
		}

		public function getDataN(){
			return $this->$data_nasc;
		}
		public function setDataN($data_nasc){
			$this->data_nasc = $data_nasc;
		}

		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($sexo){
			$this->sexo = $sexo;
		}

		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}

		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getUF(){
			return $this->UF;
		}
		public function setUF($UF){
			$this->UF = $UF;
		}
	}
?>