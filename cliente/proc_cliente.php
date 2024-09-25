<?php

require "../connection/conn.php";

$data = date('Y-m-d');
$cpfcnpj = preg_replace('/[\/.\-]/', '', $_POST['cpfcnpj']);

$sql = "INSERT INTO tecfit_academias (
        cpfcnpj,
        nome_academia,
        nomerazao,
        email,
        celular,
        cep,
        logradouro,
        numero,
        bairro,
        complemento,
        estado,
        cidade,
        data_registro
    ) VALUES (
        '{$cpfcnpj}',
        '{$_POST['nome_academia']}',
        '{$_POST['nomerazao']}',
        '{$_POST['email']}',
        '{$_POST['celular']}',
        '{$_POST['cep']}',
        '{$_POST['logradouro']}',
        '{$_POST['numero']}',
        '{$_POST['bairro']}',
        '{$_POST['complemento']}',
        {$_POST['estado']},
        {$_POST['cidade']},
        '{$data}'
    );
";

if ($dba->query($sql) == TRUE) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'erro']);
}

header("Location: confirmacao.php?email=" . urlencode($_POST['email']));
exit;
