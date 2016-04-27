<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include_once '../bootstrap.php';


use NFePHP\eFinanc\Tools;

$conf = json_decode(file_get_contents('../config/config.json'));

$tools = new Tools('../config/config.json');

$aResp = array();
$cnpj = $conf->cnpj;
$ginn = '';
$tpni = '2';
$numni = '21810869000171';

$retorno = $tools->consultarInformacoesIntermediario($cnpj, $ginn, $tpni, $numni, $aResp);

var_dump($retorno);
var_dump($aResp);
