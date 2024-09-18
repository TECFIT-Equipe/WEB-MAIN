<?php

require "../connection/conn.php";
header('Content-Type: application/json');

$sql = "SELECT id , nome FROM tecfit_cidade WHERE uf = {$_POST['id_estado']};";
$res = $dba->query($sql)->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($res, JSON_FORCE_OBJECT);
die();