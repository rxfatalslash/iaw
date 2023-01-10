<?php
    function conectaMySQL () {
        $dsn = 'mysql:host=localhost;dbname=scott';
        $user = 'root';
        $pass = '';
        try {
            $conn = new PDO($dsn, $user, $pass);
            return ($conn);
        }
        catch (PDOException $e) {
            print 'Error de conexión'. $e -> getMessage(). "<br>";
            die();
        }
    }
?>