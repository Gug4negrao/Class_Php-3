<?php
	include_once 'Padaria.class.php';
	
	$ponto_chique = new Padaria("Padaria Ponto Chique", "Rua Carvalho de Mendonça 390 - Vila Belmiro");
	
	echo nl2br("<h3>Catálogo de padarias de Santos</h3>");
	echo nl2br("<b>1º:</b><br>Nome: ".$ponto_chique->get_nome()."<br>Endereço: ".$ponto_chique->get_endereco());
?>