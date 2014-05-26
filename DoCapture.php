<?php
//Incluindo o arquivo que contém a função sendNvpRequest
require 'sendNvpRequest.php';

//Incluindo o arquivo que contém as credenciais e endpoints da API
require 'configure.php'; 

$transactionId = 'VALOR-DO-CAMPO-TRANSACTIONID';
 
//Campos da requisição da operação DoCapture
$requestNvp = array(
    'USER' => $user,
    'PWD' => $pswd,
    'SIGNATURE' => $signature,
 
    'VERSION' => '108.0',
    'METHOD'=> 'DoCapture',

    'AUTHORIZATIONID' => $transactionId,
    'AMT' => 50,
    'CURRENCYCODE' => 'BRL',
    'COMPLETETYPE' => 'NotComplete'
);
 
//Envia a requisição e obtém a resposta da PayPal
$responseNvp = sendNvpRequest($requestNvp, $sandbox);

echo 'O campo AUTHORIZATIONID é: ' . $responseNvp['AUTHORIZATIONID'];
