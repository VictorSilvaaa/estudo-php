<?php 

class Veiculo{
    protected $modelo;
    public $cor;
    public $ano;

    protected function Andar(){
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
        echo "limpando e, 321";
    }
    public function mostrarAcao(){
        $this->Andar();
    }
}
class Moto extends Veiculo{
    
}


$carro = new Carro();
#$carro->Andar(); #private
$carro->mostrarAcao();


