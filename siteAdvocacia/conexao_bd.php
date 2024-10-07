<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "siteAdvocacia";

global $conn;
$conn = mysqli_connect($servidor, $usuario, $senha, $bd);
############## VERIFICANDO CONEXÃO ##############
if (!$conn) {
    die("Falha na conexão" . mysqli_connect_error());
}

function executarComando($sql) {
    global $conn;
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['$conn']);
        return false;
    }
}
?>