<?php
//Incluindo o arquivo que contém a função sendNvpRequest
require 'sendNvpRequest.php';

//Incluindo o arquivo que contém as credenciais e endpoints da API
require 'configure.php'; 
 
//Campos da requisição da operação SetExpressCheckout
$requestNvp = array(
    'USER' => $user,
    'PWD' => $pswd,
    'SIGNATURE' => $signature,
 
    'VERSION' => '108.0',
    'METHOD'=> 'SetExpressCheckout',
 
    'PAYMENTREQUEST_0_PAYMENTACTION' => 'Order',
    'PAYMENTREQUEST_0_AMT' => '200.00',
    'PAYMENTREQUEST_0_CURRENCYCODE' => 'BRL',
    'PAYMENTREQUEST_0_ITEMAMT' => '200.00',
    'PAYMENTREQUEST_0_INVNUM' => '1234',
 
    'L_PAYMENTREQUEST_0_NAME0' => 'Reserva',
    'L_PAYMENTREQUEST_0_DESC0' => 'Taxa de reserva',
    'L_PAYMENTREQUEST_0_AMT0' => '50.00',
    'L_PAYMENTREQUEST_0_QTY0' => '1',
    'L_PAYMENTREQUEST_0_NAME1' => 'Diária',
    'L_PAYMENTREQUEST_0_DESC1' => 'Duas diárias no hotel',
    'L_PAYMENTREQUEST_0_AMT1' => '75.00',
    'L_PAYMENTREQUEST_0_QTY1' => '2',
 
    'RETURNURL' => 'http://localhost/retorno',
    'CANCELURL' => 'http://localhost/cancel'
);
 
//Envia a requisição e obtém a resposta da PayPal
$responseNvp = sendNvpRequest($requestNvp, $sandbox);

//Incluindo o arquivo responsável pelo redirecionamento
require 'redirect.php';
