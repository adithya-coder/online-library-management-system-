<?php 
    
    session_start();
    session_destroy(); //destroy the session

    header("Location:/library-management-system/index.php");


 ?>