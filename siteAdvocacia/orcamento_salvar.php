<?php
include "conexao_bd.php";

############## CAPTURANDO VARIÁVEIS ##############
$nome = $_POST["txtNome"];
$telefone = $_POST["txtTelefone"];
$email = $_POST["txtEmail"];
$cpf = $_POST["txtCpf"];
$turnoContato = $_POST["selTurno"];
$varaProcessual = $_POST["txtVP"];
$desc = $_POST["txtDesc"];

############## COMANDO SQL ##############
$sql = "INSERT INTO orcamento(nome, telefone, email, cpf, turnoContato, varaProcessual, descricao)";
$sql .= "VALUES('$nome', '$telefone', '$email', '$cpf', '$turnoContato', '$varaProcessual', '$desc')";

if (executarComando($sql))
    {
        echo "<h1>Orçamento feito!</h1>";
    }
else
    {
        echo "<h1>Erro na operação.</h1>";
    }

?>