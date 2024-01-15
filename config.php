<?php
    session_start(); 

    $servername = "localhost";
    $password = "123456";
    $dbname = "login";


    $conn = new mysqli($servername, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
?>