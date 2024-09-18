<?php

try {
    $dba = new PDO("mysql:host=143.106.241.3;dbname=cl201110;charset=utf8", "cl201110", "cl*08102005");
    $dba->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
}
