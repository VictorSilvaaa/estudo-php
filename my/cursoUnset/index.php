<?php 

//include --> configurações não fundamental
//require --> configurações fundamentais
//_once --> utilizado para importar somente uma vez

require_once 'sistema/config.php';
include_once 'helpers.php';

$texto = 'texto para resumir vindo de uma variavel';

$string = 'texto';
$int = 10;
$float = 9.99;
$bool = false;
$null = null;

var_dump($string);

echo saudacao();
echo'<hr>';
echo resumirTexto($texto, 50, 'continue');