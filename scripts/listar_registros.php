<?php 



    $tabela = $_POST['filtro_tabela'];
    $coluna = $_POST['filtro_coluna'];
    $where;

    $select = 'SELECT * FROM ' . $tabela;

    if (isset($_POST['filtro_where']) && (!empty($_POST['filtro_where']))) {
        $where = $_POST['filtro_where'];
        $select =  $select . 'WHERE ' . $coluna . ' = ' . $where;
    } else {
        $select = $select . ' ORDER BY ' . $coluna;
    }


echo $_POST['filtro_where'];
echo $select;
?>