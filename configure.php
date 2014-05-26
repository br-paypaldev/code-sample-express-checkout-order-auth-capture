<?php
//Vai usar o Sandbox, ou produção?
$sandbox = true;
 
//Baseado no ambiente, sandbox ou produção, definimos as credenciais
//e URLs da API.
if ($sandbox) {
    //credenciais da API para o Sandbox
    $user = 'empresa.brasileira_api1.email.com';
    $pswd = 'HJJPMN7FY2FZNMSZ';
    $signature = 'A7LarHgTDLlUXyPOvfqKf.jbN7exA1XF8jAWUuD8wMzqyss3d79bzcYQ';
 
    //URL da PayPal para redirecionamento, não deve ser modificada
    $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
} else {
    //credenciais da API para produção
    $user = 'usuario';
    $pswd = 'senha';
    $signature = 'assinatura';
 
    //URL da PayPal para redirecionamento, não deve ser modificada
    $paypalURL = 'https://www.paypal.com/cgi-bin/webscr';
}
