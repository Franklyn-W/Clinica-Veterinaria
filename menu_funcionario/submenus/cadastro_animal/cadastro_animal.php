<?php 

require_once '../../../scripts/validador_acesso.php';

?>

<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="cadastro_animal.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>novo cadastro</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Animal</h2>
        <form action="" method="post">

            <div class="left-section">
                <label for="dono">Nome do Dono:</label>
                <select id="dono" required>
                    <option value="">Selecione o Dono</option>
                </select>

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