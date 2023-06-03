<?php 
    session_start();
    
    if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    
        header('Location:/Clinica Veterinaria\login\login.php?login=erro2');
    }

    
?>