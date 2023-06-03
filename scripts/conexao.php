<?php

if(!@($conexao = pg_connect ("host=containers-us-west-114.railway.app dbname=railway port=7864 user=postgres password=99cO3vtRfO71HFU9bA9A"))) {
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
}

function conexao_banco()
{
    $PDO = new PDO('pgsql:host=containers-us-west-114.railway.app dbname=railway port=7864 user=postgres password=99cO3vtRfO71HFU9bA9A')
    or die ('Conexao deu ruim');
    return $PDO;
}
?>