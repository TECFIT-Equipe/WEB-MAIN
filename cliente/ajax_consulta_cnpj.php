<?php

header('Content-Type: application/json; charset=utf-8');
$curl = curl_init();

$api_key = "ec335c1e-2964-4763-a98b-79e2b42ffa1f-287a1fa3-bd68-4000-91e7-1f3a9da42e02";
$tax_id = $_POST['cnpj'];

$cnpja_url = "https://api.cnpja.com/office/";

curl_setopt_array($curl, array(
    CURLOPT_URL => $cnpja_url . $tax_id,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: " . $api_key
    ),
));

$response = curl_exec($curl);
curl_close($curl);

$company = json_decode($response);

// Verifica se a resposta não é nula e se contém dados
if ($company && isset($company->company)) {
    $telefone = isset($company->phones[0]) ?
        $company->phones[0]->area . $company->phones[0]->number : 'Telefone não disponível';

    $companyData = [
        'razao' => $company->company->name ?? 'Razão não disponível',
        'cep' => $company->address->zip ?? 'CEP não disponível',
        'numero_log' => $company->address->number ?? 'Número não disponível',
        'complemento_log' => $company->address->details ?? 'Complemento não disponível',
        'telefone' => $telefone,
        'email' => isset($company->emails[0]) ? $company->emails[0]->address : 'Email não disponível'
    ];

    echo json_encode($companyData, JSON_FORCE_OBJECT);
} else {
    // Retorna erro se a consulta não encontrou dados
    echo json_encode(['error' => 'CNPJ não encontrado ou resposta inválida.']);
}

die();
