<?php
session_start();

// ENCERRAR SESSAO
session_unset(); 
session_destroy(); 
header("Location: index.php");
?>