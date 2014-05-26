<?php
//Incluindo o arquivo que contém a função sendNvpRequest
require 'sendNvpRequest.php';

//Incluindo o arquivo que contém as credenciais e endpoints da API
require 'configure.php'; 

$transactionId = 'VALOR-DO-CAMPO-PAYMENTINFO_0_TRANSACTIONID';
 
//Campos da requisição da operação DoAuthorization
$requestNvp = array(
    'USER' => $user,
    'PWD' => $pswd,
    'SIGNATURE' => $signature,
 
    'VERSION' => '108.0',
    'METHOD'=> 'DoAuthorization',

    'TRANSACTIONID' => $transactionId,
    'AMT' => 50,
    'CURRENCYCODE' => 'BRL'
);
 
//Envia a requisição e obtém a resposta da PayPal
$responseNvp = sendNvpRequest($requestNvp, $sandbox);

echo 'O campo TRANSACTIONID é: ' . $responseNvp['TRANSACTIONID'];
