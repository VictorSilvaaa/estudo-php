<?php 

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;

}

$cliente = new Cliente();
$cliente->nome = "joao";
$cliente->endereco = "rua..";

$pedido = new Pedido();
$pedido->numero = 12;
$pedido->cliente = $cliente;



$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco

);

var_dump($dados);


?>