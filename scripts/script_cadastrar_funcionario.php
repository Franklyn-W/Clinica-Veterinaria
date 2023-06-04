<?php 
require_once ('conexao.php');
require_once ('validador_acesso.php');


$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf']; 
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero_casa = $_POST['numero-casa'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cargo = $_POST['cargo'];
$uf = $_POST['uf'];
$salario = $_POST['salario'];
$perfil_acesso_cliente = "FUNCIONARIO";

 $insertusuario = "INSERT INTO tb_funcionario(
	nome_funcionario, rg_funcionario, cpf_funcionario, telefone_funcionario, email_funcionario, cep_funcionario, endereco_funcionario, numero_casa_funcionario, bairro_funcionario, cidade_funcionario, uf_funcionario, salario_funcionario, perfil_acesso_funcionario)
	VALUES ('$nome', '$rg', '$cpf', '$telefone', '$email', '$cep', '$endereco', '$numero_casa', '$bairro', '$cidade', '$uf', '$salario', '$perfil_acesso_cliente')";
$queryusuario = pg_exec($conexao, $insertusuario);

header("Location: ../menu_funcionario/submenus/cadastrar_funci/cadastro_funcionario.php");

?>