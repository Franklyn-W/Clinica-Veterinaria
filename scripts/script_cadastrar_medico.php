<?php 
echo "Medico cadastrado";

require_once 'conexao.php';
require_once 'validador_acesso.php';


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
$uf = $_POST['uf'];
$cargo = $_POST['cargo'];
$crmv = $_POST['crmv'];
$salario = $_POST['salario'];
$perfil_acesso = "MEDICO";

$insert_medico = "INSERT INTO public.tb_medico(
	nome_medico, rg_medico, cpf_medico, telefone_medico, email_medico, cep_medico, endereco_medico, numero_casa_medico, bairro_medico, cidade_medico, uf_medico, cargo_medico, crmv_medico, salario_medico, perfil_acesso_medico)
	VALUES ('$nome', '$rg', '$cpf', '$telefone', '$email', '$cep', '$endereco', '$numero_casa', '$bairro', '$cidade', '$uf', '$cargo', '$crmv', '$salario', '$perfil_acesso);";

$queryusuario = pg_exec($conexao, $insert_medico);

header("Location: ../menu_funcionario/menu/cadastrar_medico/cadastro_medico.php");
?>

<!-- <a href="../menu_funcionario/menu/cadastrar_cliente/cadastro_cliente.php" -->
