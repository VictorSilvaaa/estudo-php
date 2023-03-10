<?php 

class ChequeEspecial extends Cheque{
    public function calcularJuro():string
    {   
        $valorComJuro = (1.40 * $this->valor);
        $valorConvReal = $this->converterReal($this->valor);
        return "Valor do cheque {$this->tipo} é sem juro R\$ {$this->converterReal($this->valor)} e com juro é R\$ {$valorConvReal} <br>";
        
    }
}