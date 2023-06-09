<?php 
 require_once '../../scripts/validador_acesso.php';
?>

<!DOCTYPE html>
<html lang="pt/br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="./menu.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>menu</title>
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
    <script src="./menu.js"></script>
</body>

</html>