<?php
	class Pedido {

		private $codigo;
		private $cpfCliente;
		private $mesa;
		private $itens;
		private $status;

		public function getCodigo() {
			return $this->codigo;
		}

		public function setCodigo($codigo) {
			$this->codigo = $codigo;
		}

		public function getCpfCliente() {
			return $this->cpfCliente;
		}

		public function setCpfCliente($cpfCliente) {
			$this->cpfCliente = $cpfCliente;
		}

		public function getMesa() {
			return $this->mesa;
		}

		public function setMesa($mesa) {
			$this->mesa = $mesa;
		}

		public function getItens() {
			return $this->itens;
		}

		public function setItens($itens) {
			$this->itens = $itens;
		}

		public function getStatus() {
			return $this->status;
		}

		public function setStatus($status) {
			$this->status = $status;
		}
	}
?>