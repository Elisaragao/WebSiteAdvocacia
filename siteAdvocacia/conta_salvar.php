<?php

include "conexao_bd.php";

############## CAPTURANDO VARIÁVEIS ##############
$nome = $_POST["txtNome"];
$numOab = $_POST["txtOab"];
$email = $_POST["txtEmail"];
$cpf = $_POST["txtCpf"];

############## COMANDO SQL ##############
$sql = "INSERT INTO conta(nome, numOab, email, cpf)";
$sql .= "VALUES('$nome', '$numOab', '$email', '$cpf')";

if (executarComando($sql))
    {
        echo "<h1>Conta criada!</h1>";
    }
else
    {
        echo "<h1>Erro na operação.</h1>";
    }

?>