<?php

require_once 'conexao.php';
require_once 'validador_acesso.php';

function listar_dados($tabela, $coluna)
{
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




        /*         foreach ($retorno_banco as $linha) {  
            
            '<tr>';
            "text";    
            '<td>1</td>';
            '<td>ID - '. $linha[0].' </td>';
            '<td>Nome - '.$linha[1].' </td>';
            '<td>RG - '.$linha[2].' </td>';
            '<td>CPF - '.$linha[3].' </td>';
            '<td>Cep - '.$linha[4].' </td>';
            '<td>Telefone - '.$linha[5].' </td>';
            '<td>Rua - '.$linha[6].' </td>';
            '<td>Número - '.$linha[7].' </td>';
            '<td>Complemento - '.$linha[8].' </td>';
            '<td>Bairro - '.$linha[9].' </td>';
            '<td>Cidade - '.$linha[10].' </td>';
            '<td>UF - '.$linha[11].' </td>';
            '</tr>';
        
        } */
    }
    return $retorno_banco;
}

header('location :../menu_funcionario/registro/registo.php')
?>
