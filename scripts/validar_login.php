<?php

session_start();
require_once('conexao.php');

$usuario_id = null;
$usuario_perfil_acesso = null;

$perfis = [1 => 'FUNCIONARIO', 2 => 'MEDICO', 3 => 'USUARIO'];

// id, nome, rg, cpf, telefone, email, cep, endereço, numero_casa, bairro, cidade, uf, cargo, salario

$usuario = $_POST['email'];
$senha = $_POST['senha'];

$select = "SELECT * FROM public.view_login where dado3 = '$usuario' and dado2 = '$senha'";
$execQuery = pg_exec($conexao, $select);
$linhas = pg_fetch_row($execQuery);

if ($linhas[3] == $usuario && $linhas[2] == $senha) {
    $_SESSION['autenticado'] = 'SIM';
    $usuario_id = $linhas[0];
    $_SESSION['nome'] = $linhas[1];
    $usuario_perfil_acesso = $linhas[4];

    if ($usuario_perfil_acesso == 'FUNCIONARIO') {
        header('location: ../menu_funcionario/menu/menu.php');
    }

    if ($usuario_perfil_acesso == 'MEDICO') {
        # code...
    }

    if ($usuario_perfil_acesso == "CLIENTE") {
        header('location: ../menu_funcionario/menu/menu_cliente.php');
    }
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header('location: ../login/login.php?login=erro'); // incluir direcionamento para caso de cadastro inexistente
}
?>
