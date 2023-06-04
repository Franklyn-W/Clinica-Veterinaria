<?php 
 require_once '../../scripts/validador_acesso.php';
 ?>

<!DOCTYPE html>
<html lang="pt/br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="agandamento.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tipo de agendamento</title>
  </head>
  <body>
    <div class="container">
      <h2>Novo Agendamento</h2>
      <form action="" id="form-agendamento">
        <div class="form-column">
          <label for="tipo-agendamento">Tipo de Agendamento:</label>
          <select id="tipo-agendamento" required>
            <option value="">Selecione o tipo de agendamento</option>
            <option value="consulta">Consulta</option>
            <option value="vacinacao">Vacinação</option>
            <option value="cirurgia">Cirurgia</option>
          </select>
          <label for="nome-dono">Nome do Dono:</label>
          <select id="nome-dono" required>
            <option value="">Selecione o nome do Dono</option>
          </select>
          <label for="data">Data:</label>
          <input type="date" id="data" required />
          <label for="medico">Médico:</label>
          <select name="medico" id="medico">
            <option value="">Selecione o médico</option>
          </select>
          <label for="observacao">Observação:</label>
          <textarea id="observacao"></textarea>
        </div>
        <div class="form-column">
          <label for="tipo-animal">Tipo de Animal:</label>
          <select id="tipo-animal" required>
            <option value="">Selecione um tipo de Animal</option>
          </select>
          <label for="nome-animal">Nome do Animal:</label>
          <select id="nome-animal">
            <option value="">Selecione o nome do Animal</option>
          </select>
          <label for="hora">Hora:</label>
          <input type="time" id="hora" required />
          <label for="custo">Custo:</label>
          <input type="number" id="custo" min="0" step="0.1" />
          <div class="button-container">
            <button type="reset" class="limpar">Limpar</button>
            <button type="button" class="cancelar" onclick="cancelarCadastro()">Cancelar</button>
            <button type="submit" class="cadastrar">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
    <script src="agendamento.js"></script>
  </body>
</html>