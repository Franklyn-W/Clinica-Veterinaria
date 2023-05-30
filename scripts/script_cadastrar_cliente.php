<?php 
require_once ('conexao.php');
require_once ('validador_acesso.php');

"SELECT MAX (id_cliente) FROM tb_cliente";
$consultaId = pg_query($conexao, "SELECT MAX (id_cliente) FROM tb_cliente");
$id = pg_fetch_result($consultaId,0);
$id = $id +1;


$nome = $_POST['nome'];
$cpf = $_POST['cpf']; 
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero_casa = $_POST['numero-casa'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$perfil_acesso_cliente = "CLIENTE";

 $insertusuario = "INSERT INTO tb_cliente(
	id_cliente, nome_cliente, cpf_cliente, telefone_cliente, email_cliente, cep_cliente, endereco_cliente, numero_casa_cliente, bairro_cliente, cidade_cliente, uf_cliente, perfil_acesso_cliente)
	VALUES ($id, '$nome', '$cpf', '$telefone', '$email', '$cep', '$endereco', '$numero_casa', '$bairro', '$cidade', '$uf', '$perfil_acesso_cliente')";
$queryusuario = pg_exec($conexao, $insertusuario);

header("Location: ../menu_funcionario/submenus/cadastri_cliente/cadastrar_cliente.php");

?>

<!-- <a href="/menu_funcionario/submenus/cadastri_cliente/cadastrar_cliente.php"></a> -->
<!-- <a href="../menu_funcionario/submenus/cadastri_cliente/cadastrar_cliente.php" -->