<?php
//Incluindo o arquivo que contém a função sendNvpRequest
require 'sendNvpRequest.php';

//Incluindo o arquivo que contém as credenciais e endpoints da API
require 'configure.php'; 

$token = 'VALOR-DO-TOKEN';
 
//Campos da requisição da operação GetExpressCheckoutDetails
$requestNvp = array(
    'USER' => $user,
    'PWD' => $pswd,
    'SIGNATURE' => $signature,
 
    'VERSION' => '108.0',
    'METHOD'=> 'GetExpressCheckoutDetails',

    'TOKEN' => $token
);
 
//Envia a requisição e obtém a resposta da PayPal
$responseNvp = sendNvpRequest($requestNvp, $sandbox);

echo 'O campo PayerID é: ' . $responseNvp['PAYERID'];
