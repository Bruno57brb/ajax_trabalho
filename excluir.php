<?php

$id_tabuleiro = $_GET['id_tabuleiro'];

require_once "conexao.php";
$conexao = conectar();
$sql = "DELETE FROM tabuleiro WHERE id_tabuleiro = $id_tabuleiro";
$retorno = executarSQL($conexao, $sql);
echo json_encode($retorno);