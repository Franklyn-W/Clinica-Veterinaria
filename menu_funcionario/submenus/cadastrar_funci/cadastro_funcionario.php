<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro_funcionario.css">
    <title>cadastro Cliente</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro funcionario</h2>
        <form action="../../../scripts/script_cadastrar_funcionario.php" method="post">
            <div class="left-section">

                <label for="nome">Nome:</label>
                <input name="nome" type="text" id="nome" required>

                <label for="cpf">CPF</label>
                <input name="cpf" type="text" id="cpf" required>

                <label for="email">E-mail</label>
                <input name="email" type="text" id="email" required>

                <label for="Endereço">Endereço</label>
                <input name="endereco" type="text" id="endereco" required>

                <label for="bairro">Bairro</label>
                <input name="bairro" type="text" id="bairro" required>

                <label for="cargo">Cargo</label>
                <input name="cargo" type="text" id="cargo" required>

                <label for="salario">Salario</label>
                <input type="text" name="salario" id="salario">
            </div>

            <div class="right-section">

                <label for="rg">RG</label>
                <input name="rg" type="text" id="rg" required>

                <label for="telefone">Telefone</label>
                <input name="telefone" type="text" id="telefone" required>

                <label for="cep">Cep</label>
                <input name="cep" type="text" id="cep">

                <label for="numero-casa">Numero da Casa</label>
                <input name="numero-casa" type="text" id="numero-casa">

                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">

                <label for="uf">UF</label>
                <input name="uf" type="text" id="uf">
            </div>

            <div class="button-group">
                <button type="reset" class="limpar">Limpar</button>
                <button type="button" class="cancelar" onclick="cancelarCadastro()">Cancelar</button>
                <button type="submit" class="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

    <script src="cadastro_funcionario.js"></script>
</body>
</html>