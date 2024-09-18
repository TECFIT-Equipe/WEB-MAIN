<?php

require "../connection/conn.php";
header('Content-Type: application/json');

$sql = "SELECT id FROM tecfit_estado te WHERE uf = '{$_POST['uf']}';";
$res = $dba->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$id_uf = $res[0]['id'];

$sql = "SELECT id FROM tecfit_cidade tc WHERE uf = {$id_uf} AND nome = '{$_POST['cidade']}';";
$arr = $dba->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$id_cidade = $arr[0]['id'];

$retorno = [
    'id_uf' => $id_uf,
    'id_cidade' => $id_cidade,
];

echo json_encode($retorno);
die();