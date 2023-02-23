<?php 

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "andou";
    }

    public function Parar(){
        echo "parou";
    }
}


class Carro extends Veiculo{
  public function ligarLimpador(){
    echo "limpando";
  }
}
class Moto extends Veiculo{
    
}


$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
$carro->ligarLimpador();
var_dump($carro);
echo "<br>";


$moto = new Moto();
$moto->modelo = "Honda";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Andar();
var_dump($moto);

