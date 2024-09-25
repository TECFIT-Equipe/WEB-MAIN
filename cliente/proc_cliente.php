<?php

require "../connection/conn.php";

$data = date('Y-m-d');
$cpfcnpj = preg_replace('/[\/.\-]/', '', $_POST['cpfcnpj']);
$senha = "1234";

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

$sql2 = "INSERT INTO tecfit_usuarios (
    nome,
    login,
    senha,
    tipo_usuario,
    id_plano,
    id_academia,
    cpfcnpj,
    email,
    celular,
    ativo,
    data_cadastro
) VALUES (
    '{$_POST['nome_academia']}',
    '{$_POST['email']}',
    '{$senha}',
    '1',
    '1',
    '8',
    '{$cpfcnpj}',
    '{$_POST['email']}',
    '{$_POST['celular']}',
    '1',
    '{$data}'
);
";

if ($dba->query($sql) == TRUE) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'erro']);
}
if ($dba->query($sql2) == TRUE) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'erro']);
}

header("Location: confirmacao.php?email=" . urlencode($_POST['email']));
exit;
