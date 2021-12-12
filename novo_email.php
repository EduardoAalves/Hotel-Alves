<?php 

include "conexao.php";

$sql = 'insert into Cliente(cpf_cliente, nome_cliente, sexo, cidade, bairro)
            values (
                "999966699-99",
                "'.$_POST['name'].'",
                "masculino",
                "Extrema"
                "Portal de Extrema"
            );';
$resultado = $conector->query($sql);
if($resultado === TRUE){
    echo "<script language='javascript' type='text/javascript'>alert('Registro inserido!');
    window.location.href= 'index';</script>";
} else {
    echo "<script language='javascript' type='text/javascript'>alert('Falha na inserção!');
    window.location.href= 'index';</script>";
}

$_POST['name'];

$_POST['email'];

$conector->close();

?>