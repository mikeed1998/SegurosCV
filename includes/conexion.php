<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'seguros';

    $conn = mysqli_connect($host, $user, $password, $db);
    
    if(!$conn) {
        echo "Error, no se pudo establecer la conexión";
    }
?>