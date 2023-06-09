<?php

require_once '../../../scripts/validador_acesso.php';
require_once('../../../scripts/conexao.php');



?>

<!DOCTYPE html>
<html lang="pt/br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="cadastro_animal.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>novo cadastro</title>
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
                            <a href="../submenus/cadastrar_animal/cadastro_animal.php">Animal</a>
                        </li>
                        <li>
                            <a href="../submenus/cadastrar_cliente/cadastro_cliente.php">Dono</a>
                        </li>
                        <li>
                            <a href="../submenus/cadastrar_funci/cadastro_funcionario.php">Funcionário</a>
                        </li>
                        <li>
                            <a href="../submenus/cadastrar_medico/cadastro_medico.php">Médico</a>
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
        <h3>Cadastro de Animal</h3>
        <form action="../../../scripts/script_cadastrar_pet.php" method="post">

            <div class="left-section">

                <label for="cpf_tutor">CPF do Tutor:</label>
                <select name="genero" id="genero">
                    <option value="">Selecione o CPF do Tutor</option>
                </select>

                <label for="nome_tutor">Nome do Tutor</label>
                <input type="text" name="nome_tutor" id="nome_tutor" required>


                <label for="animal">Nome do Animal:</label>
                <input type="text" id="animal" required>

                <label for="rga">RGA:</label>
                <input type="text" id="rga" required>

                <label for="genero">Gênero</label>
                <select name="genero" id="genero">
                    <option value="">Selecione o Gênero</option>
                    <option value="Macho">Macho</option>
                    <option value="Fêmea">Fêmea</option>
                </select>

                <label for="especie">Espécie</label>
                <input type="text" id="especie">

                <label for="descricao">Descrição</label>
                <textarea id="descricao" rows="5"></textarea>
            </div>

            <div class="right-section">
                <label for="raca">Raça:</label>
                <input type="text" required>

                <label for="anos-meses">Idade:</label>
                <input type="number" id="idade" name="idade">
                <div class="radio-group">
                    <label for="meses">Meses</label>
                    <input type="radio" id="meses" name="anos-meses">
                    <label for="anos">Anos</label>
                    <input type="radio" name="anos-meses" id="anos" required>
                </div>

                <div class="button-group">
                    <button type="reset" onclick="LimparFormulario()">Limpar</button>
                    <a href="../../menu/menu.php"> <button type="button" onclick="cancelarCadastro()">Cancelar</button></a>
                    <button type="submit">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="cadastro_animal.js"></script>
</body>

</html>