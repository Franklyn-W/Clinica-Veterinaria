<?php
require_once '../../scripts/validador_acesso.php';
require_once '../../scripts/conexao.php';





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
        <form action="registro.php" method="post">
            <div class="search">
                <label for="filter">Filtrar por:</label>
                <select id="filter" name="filtro_tabela">
                    <option value="cliente">Dono</option>
                    <option value="pet">Animal</option>
                    <option value="exame">Exames</option>
                    <option value="consulta">Consultas</option>
                    <option value="tratamento">Tramentos</option>
                    <option value="medico">Medicos</option>
                    <option value="funcionario">funcionario</option>
                </select>

                <label for="searchBy">Pesquisar por:</label>
                <select id="searchBy" name="filtro_coluna">
                    <option value="id">ID</option>
                    <option value="nome">Nome</option>
                    <option value="cpf">CPF</option>
                    <option value="rg">RG</option>
                    <option value="telefone">Telefone</option>
                    <option value="email">E-mail</option>
                    <option value="cep">CEP</option>
                </select>

                <label for="searchInput">Pesquisar:</label>
                <input type="text" id="searchInput" name="filtro_where">
                <button class="search-button" type="submit"">Pesquisar</button>
                <a href="../menu/menu.php"> <button class="search-button" type="button">Voltar</button></a>
            </div>
        </form>
        



        <div class=" results">

                    <table>
                        <thead>
                            <tr>
                                <th>Nº</th>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Tel</th>
                                <th>E-mail</th>
                                <th>Cep</th>
                                <th>Rua</th>
                                <th>Número</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>UF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ((isset($_POST['filtro_tabela'], $_POST['filtro_coluna'])) && (!empty($_POST['filtro_tabela']))) {

                                $tabela = $_POST['filtro_tabela'];
                                $coluna = $_POST['filtro_coluna'];
                                $select = 'SELECT * FROM tb_' . $tabela;

                                if ($tabela == "cliente" || $tabela == "funcionario" || $tabela == "medico" || $tabela == "pet") {

                                    if (isset($_POST['filtro_where']) && (!empty($_POST['filtro_where']))) {

                                        $where = $_POST['filtro_where'];
                                        $select = $select . ' WHERE ' . $coluna . '_' . $tabela . ' = ' . "'" . $where . "'";
                                        //  SELECT * FROM tb_cliente WHERE id = '1' Exemplo de retorno

                                    } else {
                                        $select = $select . ' ORDER BY ' . $coluna . '_' . $tabela;
                                        //  SELECT * FROM tb_cliente ORDER BY nome_cliente  Exemplo de retorno  
                                    }

                                    $consulta = conexao_banco()->prepare($select);
                                    $consulta->execute();
                                    $retorno_banco = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                    //print_r($retorno_banco);

                                    if (($consulta->rowCount() < 0)) {
                                        echo "Nenhum dado encontrado com os paramentros informados";
                                    }

                                    if ($tabela == 'funcionario') {
                                        foreach ($retorno_banco as $linha) {
                                            $cont = 1;
                                            ?>
                                            <tr>
                                                <td><?= $cont ?></td>
                                                <td><?= $linha['id_funcionario'] ?></td>
                                                <td><?= $linha['nome_funcionario'] ?> </td>
                                                <td><?= $linha['cpf_funcionario'] ?> </td>
                                                <td><?= $linha['telefone_funcionario'] ?> </td>
                                                <td><?= $linha['email_funcionario'] ?> </td>
                                                <td><?= $linha['cep_funcionario'] ?> </td>
                                                <td><?= $linha['endereco_funcionario'] ?> </td>
                                                <td><?= $linha['numero_casa_funcionario'] ?> </td>
                                                <td><?= $linha['bairro_funcionario'] ?> </td>
                                                <td><?= $linha['cidade_funcionario'] ?> </td>
                                                <td><?= $linha['uf_funcionario'] ?> </td>
                                            </tr>
                                        <?php $cont += 1;
                                        }
                                    }

                                    if ($tabela == 'medico') {
                                        foreach ($retorno_banco as $linha) {
                                            $cont = 1;
                                            ?>
                                            <tr>
                                                <td><?= $cont ?></td>
                                                <td><?= $linha['id_medeico'] ?></td>
                                                <td><?= $linha['nome_medeico'] ?> </td>
                                                <td><?= $linha['cpf_medeico'] ?> </td>
                                                <td><?= $linha['telefone_medeico'] ?> </td>
                                                <td><?= $linha['email_medeico'] ?> </td>
                                                <td><?= $linha['cep_medeico'] ?> </td>
                                                <td><?= $linha['endereco_medeico'] ?> </td>
                                                <td><?= $linha['numero_casa_medeico'] ?> </td>
                                                <td><?= $linha['bairro_medeico'] ?> </td>
                                                <td><?= $linha['cidade_medeico'] ?> </td>
                                                <td><?= $linha['uf_medeico'] ?> </td>
                                            </tr>
                                            <?php $cont += 1;
                                         }
                                    }

                                    if ($tabela == 'cliente') {
                                        foreach ($retorno_banco as $linha) {
                                            $cont = 1;
                                            ?>
                                            <tr>
                                            <td><?= $cont ?></td>
                                                <td><?= $linha['id_cliente'] ?></td>
                                                <td><?= $linha['nome_cliente'] ?> </td>
                                                <td><?= $linha['cpf_cliente'] ?> </td>
                                                <td><?= $linha['telefone_cliente'] ?> </td>
                                                <td><?= $linha['email_cliente'] ?> </td>
                                                <td><?= $linha['cep_cliente'] ?> </td>
                                                <td><?= $linha['endereco_cliente'] ?> </td>
                                                <td><?= $linha['numero_casa_cliente'] ?> </td>
                                                <td><?= $linha['bairro_cliente'] ?> </td>
                                                <td><?= $linha['cidade_cliente'] ?> </td>
                                                <td><?= $linha['uf_cliente'] ?> </td>
                                            </tr>
                                            <?php $cont += 1;
                                        }
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
    </div>
</body>

</html>