<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
   
</head>
<body>
    <div class="menu-container">
        <div class="menu-header">
             <h3>Bem-Vindo <p></p><?php echo $_SESSION['nome'];?></h3>
            <button class="menu-toggle">☰</button>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="">Agendamento</a></li>
                <li class="submenu">
                    <a id="novo-cadastro">Novo Cadastro</a>
                    <ul class="hidden">
                        <li><a href="../submenus/cadastro_animal/cadastro_animal.php">Animal</a></li>
                        <li><a href="../submenus/cadastri_cliente/cadastrar_cliente.php">Dono</a></li>
                        <li><a href="../submenus/cadastrar_funci/cadastro_funcionario.php">Funcionário</a></li> 
                        <li><a href="../submenus/medico/cadastro_medico.php">Médico</a></li>
                        
                        
                    </ul>
                </li>
                <li><a href="">Registro</a></li>
                <li><a href="">Agenda</a></li>
                <li><a class="logout" href="">Sair</a></li>
            </ul>
        </nav>        
    </div>
    <script src="./menu.js"></script>

</body>
</html>

