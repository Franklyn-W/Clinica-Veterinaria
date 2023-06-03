<?php 
 require_once '../../scripts/validador_acesso.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo</title>
</head>
<body>
    <div class="container">
        <form action="" method="post"></form>
        <div class="search">
            <label for="filter">Filtrar por:</label>
            <select id="filter">
                <option value="dono">Dono</option>     
                <option value="animal">Animal</option>
                <option value="exame">Exames</option>
                <option value="consulta">Consultas</option>
                <option value="tratamento">Tramentos</option>
                <option value="medico">Medicos</option>
                <option value="funcionario">Funcionarios</option>
            </select>

            <label for="searchBy">Pesquisar por:</label>
            <select id="searchBy">
                <option value="id">ID</option>     
                <option value="nome">Nome</option>     
                <option value="codigo">Código</option>
                <option value="cpf">CPF</option>
                <option value="rg">RG</option>
                <option value="telefone">Telefone</option>
                <option value="email">E-mail</option>
            </select>

            <label for="searchInput">Pesquisar:</label>
      <input type="text" id="searchInput">
      <button class="search-button" type="button" onclick="pesquisar()">Pesquisar</button>
        </div>



        <div class="results">

            <table>
                <thead>
                    <tr>
                        <td></td>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Tel</th>
                        <th>Cep</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>UF</th>   
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nome - valor da coluna </td>
                    <td>ID -  valor da coluna</td>
                    <td>RG - valor da coluna</td>
                    <td>CPF - valor da coluna</td>
                    <td>Cep - valor da coluna</td>
                    <td>Telefone - valor da coluna </td>
                    <td>Rua - valor da coluna</td>
                    <td>Número - valor da coluna</td>
                    <td>Complemento - valor da coluna</td>
                    <td>Bairro - valor da coluna</td>
                    <td>Cidade - valor da coluna</td>
                    <td>UF - valor da coluna</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nome - valor da coluna </td>
                    <td>ID -  valor da coluna</td>
                    <td>RG - valor da coluna</td>
                    <td>CPF - valor da coluna</td>
                    <td>Cep - valor da coluna</td>
                    <td>Telefone - valor da coluna </td>
                    <td>Rua - valor da coluna</td>
                    <td>Número - valor da coluna</td>
                    <td>Complemento - valor da coluna</td>
                    <td>Bairro - valor da coluna</td>
                    <td>Cidade - valor da coluna</td>
                    <td>UF - valor da coluna</td>

                    <!--adicione quantas linhas quer, esse vai puxar a coluna do banco com os bandos -->
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>