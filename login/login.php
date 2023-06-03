<!DOCTYPE html>
<html lang="pt/br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <img src="../Img/logo.png"alt="">
        <h1>Luffy Vet Pet</h1>
        <form action="../scripts/validar_login.php" method="post">
            <label for="Usuario">Usuario:</label>
            <input type="email" name="email" id="email" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
            <?php
            if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <div class="text-danger">Usuario ou senha inválidos</div>
            <?php } ?>

            <?php
            if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                <div class="text-danger">Opa! Você esqueceu de se apresentar.<br> Informe suas credenciais aqui primeiro.</div>
            <?php } ?>



            <button type="submit">Entrar</button>
        </form>
<<<<<<< HEAD
        <div class="developers-section">
            <h3>Desenvolvedores</h3>
            <ul>
                <li>
                    <a href="https://github.com/viegasrick/viegasrick" target="_blank">Rikelmen Viegas |<a>
                    <a href="https://github.com/Franklyn-W" target="_blank">Franklyn Winston | </a>
                    <a href="https://github.com/PBVieira2k21" target="_blank">Mateus Vieira </a>
                </li>
            </ul>  
        </div> 
=======
>>>>>>> parent of d38da0c (notificação da tela de login)
    </div>
</body>

</html>