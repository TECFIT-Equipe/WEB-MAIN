<?php

header('Content-Type: text/html; charset=utf-8');
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://consultacep.brasap.com.br/api/cep/' . $_POST['cep'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
  ));

$response = curl_exec($curl);
curl_close($curl);

$end = json_decode($response);

echo json_encode($end->response->dados);
die();

?>