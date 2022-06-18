<?php
$nome = $_POST['nome'];
$RG = $_POST['RG'];
$CPF = $_POST['CPF'];
$nacionalidade = $_POST['UF'];
$telefone = $_POST['telefone'];
$dados = ["nome" => $nome, "RG" => $RG, "CPF" => $CPF, "nacionalidade" => $nacionalidade, "telefone" => $telefone];
$dadosCookie  = serialize($dados);
setcookie("cadastro", $dadosCookie);
header('location: ./candidatos.php');
exit;
