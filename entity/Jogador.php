<?php 


class Jogador {
	
	private $nomeJogador;
	private $assassinatos;
	private $mortes;

	public function __construct($nomeJogador) {
		this->setNomeJogador($nomeJogador);
		this->setMortes(0);
		this->setAssassinatos(0);

	}

	public function setNomeJogador($nomeJogador) {
		this->nomeJogador = $nomeJogador;
	}

	public function getNomeJogador() {
		return this->nomeJogador;
	}

	public function setAssassinatos($assassinatos) {
		this->assassinatos = $assassinatos;
	}

	public function getAssassinatos() {
		return this->assassinatos;
	}

	public function setMortes($mortes) {
		this->mortes = $mortes;
	}

	public function getMortes() {
		return this->mortes;
	}

}

 ?>