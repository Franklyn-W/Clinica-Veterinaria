<?php 
 require_once '../../../scripts/validador_acesso.php';
?>
<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro_medico.css">
    <title>cadastro Cliente</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro medico</h2>
        <form action="" method="post">
            <div class="left-section">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" required>

                <label for="cmrv">CRMV</label>
                <input type="number" id="cmrv" required>

                <label for="rg">RG</label>
                <input type="text" id="rg" required>

                <label for="cpf">CPF</label>
                <input type="text" id="cpf" required>

                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" required>

                <label for="email">E-mail</label>
                <input type="text" id="email" required>

                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" required>

                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" required>

            </div>

            <div class="right-section">
                <label for="cpf">Cargo</label>
                <input type="text" id="cargo" required>

                <label for="cpf">Salario</label>
                <input type="text" id="salario" required>

                <label for="cep">Cep</label>
                <input type="text" id="cep">

                <label for="bairro">Bairro</label>
                <input type="text" id="bairro">

                <label for="numero-casa">Numero da Casa</label>
                <input type="number" id="numero-casa">

                <label for="uf">UF</label>
                <input name="uf" type="text" id="uf">
            </div>

            <div class="button-group">
                <button type="reset" class="limpar">Limpar</button>
                <a href="../../menu/menu.php"> <button type="button" class="cancelar" onclick="cancelarCadastro()">Cancelar</button></a>
                <button type="submit" class="cadastrar">Cadastrar</button>
            </div>


        </form>
    </div>

    <script src="cadastro_medico.js"></script>
</body>
</html>