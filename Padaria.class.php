<?php
class Padaria{
	private $nome;
	private $endereco;
	
	function __construct($nome, $endereco){
		$this->nome = $nome;
		$this->endereco = $endereco;
	}
	
	#region Gets
	function get_nome(){
		return $this->nome;
	}
	
	function get_endereco(){
		return $this->endereco;
	}
	#endregion
}
?>