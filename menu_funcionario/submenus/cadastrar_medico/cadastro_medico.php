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
        <form action="../../../scripts/script_cadastrar_medico.php" method="post">
            <div class="left-section">
                
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" required>
                
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" required>
                
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" required>
                
                <label for="bairro">Bairro</label>
                <input type="text" id="bairro" name="bairro">
                
                <label for="uf">UF</label>
                <input type="text" id="uf" name="uf">

                <label for="cmrv">CRMV</label>
                <input type="text" id="cmrv" name="crmv" required>                
            </div>

            <div class="right-section">
                <label for="rg">RG</label>
                <input type="text" id="rg" name="rg" required>
                
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone" required>
                
                <label for="cep">Cep</label>
                <input type="text" id="cep" name="cep">
                
                <label for="numero-casa">Numero da Casa</label>
                <input type="text" id="numero-casa" name="numero-casa">
                
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" required>

                <label for="cargo">Cargo</label>
                <input type="text" id="cargo" name="cargo" required>

                <label for="salario">Salario</label>
                <input type="text" id="salario" name="salario" required>
            </div>

            <div class="linha-espaço">
            </div>
            <div class="button-group"> <!-- Precisa descer mais os botões, estão muito proximos dos input -->
                <button type="reset" class="limpar">Limpar</button>
                <a href="../../menu/menu.php"> <button type="button" class="cancelar" onclick="cancelarCadastro()">Cancelar</button></a>
                <button type="submit" class="cadastrar">Cadastrar</button>
            </div>


        </form>
    </div>

    <script src="cadastro_medico.js"></script>
</body>
</html>