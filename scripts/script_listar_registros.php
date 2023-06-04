<?php 

    require_once 'conexao.php';

    $tabela = $_POST['filtro_tabela'];
    $coluna = $_POST['filtro_coluna'];
    $where;
    $where_tabela;

    function consultar_dados(){}

    $select = 'SELECT * FROM tb_' . $tabela;

    if (isset($_POST['filtro_where']) && (!empty($_POST['filtro_where']))) {
        $where = $_POST['filtro_where'];
        $select = $select . ' WHERE ' . $coluna .'_' . $tabela .' = ' ."'" . $where . "'";
    //  SELECT * FROM tb_cliente WHERE 
    } else {
        $select = $select . ' ORDER BY ' . $coluna . '_'. $tabela;
    //  SELECT * FROM tb_cliente ORDER BY nome_cliente    
    }


    //$consulta = conexao_banco() -> prepare($select);
    //$consulta -> execute();
    //$retorno_banco = $consulta -> fetchAll(PDO::FETCH_ASSOC);



//echo $_POST['filtro_where'];
echo $select;
//echo $retorno_banco;
?>