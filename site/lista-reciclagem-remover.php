<?php

require "bd/conexao.php";

if($_POST){
	$id = $_POST['idreciclagem'];

	$reciclagem = new Reciclagem();
	$retorno = $reciclagem->remover($id);

	if($retorno){
		die("1");
	}else{
		die("0");
	}

}