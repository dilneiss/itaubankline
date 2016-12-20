<?php

// load autoload

$autoload_path = dirname(dirname(dirname(dirname(__FILE__)))) . '/autoload.php';

//print_r($autoload_path);exit;

$included = include $autoload_path;

if (!$included) {
    echo 'Falha no carregamento do autoload';
    exit(1);
}

// ItauBankline

$codEmp = 'J0043497660001370000012814';
$chave = 'MESACORTRA243101';
$pedido = '45000034';
$metodoResultado = 1;

$itauCripto = new \ItauBankline\ItauCripto();
$dadosCriptografados = $itauCripto->geraConsulta($codEmp , $pedido , $metodoResultado , $chave);

echo '<hr>';

var_dump($dadosCriptografados);

echo '<hr>';

echo 'https://shopline.itau.com.br/shopline/consulta.aspx?DC=' . $dadosCriptografados;

echo '<hr>';

try {

$itauService = new \ItauBankline\ItauBanklineService();

$service_response = $itauService->consultaTransacao($dadosCriptografados);

var_dump($service_response);

} catch (Exception $e) {
var_dump($e->getMessage());
}



