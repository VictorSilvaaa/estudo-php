<?php 

// Protected -> escopo da classe e de quem herda
// Private -> escopo apenas da classe local
// public -> acessado de qualquer parte


class Veiculo{
    protected $modelo = 'gol';
    public $cor;
    public $ano;

    public function Andar(){
        echo "andou";
    }

    public function Parar(){
        echo "parou";
    }

    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getModelo(){
        return $this->modelo;
    }
}


class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "limpando";
    }
    public function mostrarDado(){
        echo $this->modelo;
    }
}
class Moto extends Veiculo{
    
}


$carro = new Carro();
// $carro->modelo = "Gol";
// $carro->cor = "Vermelho";
// $carro->ano = 2018;
// $carro->Andar();
// $carro->ligarLimpador();
// var_dump($carro);
// echo "<br>";

echo $carro->mostrarDado();
// $moto = new Moto();
// $moto->modelo = "Honda";
// $moto->cor = "Azul";
// $moto->ano = 2017;
// $moto->Andar();
// var_dump($moto);

