<?php
	class Cliente {

		private $nome;
		private $telefone;
		private $cpf;

		public function setNome($nome) {
			$this->nome = $nome;
		}

		public function getNome() {
			return $this->nome;
		}

		public function setTelefone($telefone) {
			$this->telefone = $telefone;
		}

		public function getTelefone() {
			return $this->telefone;
		}

		public function setCpf($cpf) {
			$this->cpf = $cpf;
		}

		public function getCpf() {
			return $this->cpf;
		}
	}
?>