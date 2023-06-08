<?php 
 require_once '../../scripts/validador_acesso.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu/menu.css">
    <link rel="stylesheet" href="agenda.css">
    <title>Agenda</title>
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
                <li><a href="../agendamento/agendamento.html">Agendamento</a></li>
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
                <li><a href="../agendar/agenda.html">Agenda</a></li>
                <li><a class="logout" href="../../scripts/logoff.php">Sair</a></li>
            </ul>
        </nav>
    </div>
    <script src="./menu.js"></script>

    <h3>Agenda</h3>
    <div class="container">
        
        <form action="" method="post">
            <div class="filter"> 
            <label for="filterTIpo">Filtrar por Tipo:</label>
            <select id="filterTIpo">
                <option value="consulta">Consulta</option>
                <option value="tratamento">Tratamento</option>
                <option value="medico">Médico</option>
            </select>

            <label for="filterData">Data Entre</label>
            <input type="date" id="filterData">
            <label for="filterData">até</label>
            <input type="date" id="filterData">

            <label for="filterMedico">Médico</label>
            <select id="filterMedico">
                <option value="">Todos</option>
            </select>
            <button type="reset" class="reset-button">Limpar</button>
        </div>


        <div class="results">
            <table>
                <thead>
                    <th>ID</th>
                    <th>Médico</th>
                    <th>Animal</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Sintomas</th>
                    <th>Dianóstico</th>
                   
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Médico 1</td>
                        <td>Animal 1</td>
                        <td>2023-05-20</td>
                        <td>Consulta</td>
                        <td>Sintomas</td>
                        <td>Dianóstico</td>
                    </tr><tr>
                        <td>2</td>
                        <td>Médico 1</td>
                        <td>Animal 1</td>
                        <td>2023-05-20</td>
                        <td>Consulta</td>
                        <td>Sintomas</td>
                        <td>Dianóstico</td>
                    </tr>
                  
                </tbody>
            </table>
        </div>







        </form>
    </div>
</body>
</html>