<?php 

if(isset($_POST['cpf_tutor']) ){
    
    function buscar_tutor()
    {
        require_once $conexao;
    
        $cpf_tutor = $_POST['cpf_tutor'];
        $select = 'SELECT * FROM db_cliente where cpf_cliente = "$cpf_cliente"';
        $query = pg_exec($conexao, $select);
        $cpf_tutor = pg_fetch_row($query);
        echo $cpf_tutor;
    };
    
}




?>