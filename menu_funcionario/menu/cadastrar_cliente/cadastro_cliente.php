<?php
 require_once '../../../scripts/validador_acesso.php';
?>

<!DOCTYPE html>
<html lang="pt/br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="cadastrar_cliente.css">
    <title>cadastro Cliente</title>
</head>

<body>
<div class="menu-container">
        <div class="menu-header">
            <h2>
                Bem-Vindo
                <p><?php echo $_SESSION['nome'];?></p>
            </h2>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="../agendamento/agendamento.php">Agendamento</a></li>
                <li class="submenu">
                    <a id="novo-cadastro">Novo Cadastro</a>
                    <ul>
                        <li>
                            <a href="../menu/cadastrar_animal/cadastro_animal.php">Animal</a>
                        </li>
                        <li>
                            <a href="../menu/cadastrar_cliente/cadastro_cliente.php">Dono</a>
                        </li>
                        <li>
                            <a href="../menu/cadastrar_funci/cadastro_funcionario.php">Funcionário</a>
                        </li>
                        <li>
                            <a href="../menu/cadastrar_medico/cadastro_medico.php">Médico</a>
                        </li>
                    </ul>
                </li>
                <li><a href="../registro/registro.php">Registro</a></li>
                <li><a href="../agendar/agenda.php">Agenda</a></li>
                <li><a class="logout" href="../../scripts/logoff.php">Sair</a></li>
            </ul>
        </nav>
    </div>

    
    <div class="container">
        <h3>Cadastro Cliente</h3>
        <form action="../../../scripts/script_cadastrar_cliente.php" method="post">
            <div class="left-section">

                <label for="nome">Nome:</label>
                <input name="nome" type="text" id="nome" required>

                <label for="telefone">Telefone</label>
                <input name="telefone" type="text" id="telefone" required>

                <label for="cep">Cep</label>
                <input name="cep" type="text" id="cep">

                <label for="numero-casa">Numero da casa</label>
                <input name="numero-casa" type="text" id="numero-casa">

                <label for="cidade">Cidade</label>
                <input name="cidade" type="text" id="cidade">

            </div>

            <div class="right-section">
                <label for="cpf">CPF</label>
                <input name="cpf" type="text" id="cpf" required>

                <label for="email">E-mail</label>
                <input name="email" type="text" id="email" required>

                <label for="rua">Rua</label>
                <input name="endereco" type="text" id="rua">

                <label for="bairro">Bairro</label>
                <input name="bairro" type="text" id="bairro">

                <label for="uf">Estado</label>
                <input name="uf" type="text" id="uf"><br>
            </div>

            <div class="button-group">
                <button type="reset" class="limpar">Limpar</button>
                <a href="../../menu/menu.php"> <button type="button" class="cancelar" onclick="cancelarCadastro()">Cancelar</button></a>
                <button type="submit" class="cadastrar">Cadastrar</button>
            </div>

        </form>
    </div>
    <script src="cadastrar_cliente.js">
    </script>
</body>

</html>