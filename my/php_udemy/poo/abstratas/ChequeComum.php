<?php 

class ChequeComum extends Cheque{
    public function calcularJuro():string
    {   

        $valorComJuro = (1.20 * $this->valor);

        $valorConvReal = parent::converterReal($valorComJuro);
        return "Valor do cheque {$this->tipo} é sem juro R\$ {$this->converterReal($this->valor)} e com juro é R\$ {$valorConvReal} <br>";
        
    }
}