<?php 


class ClientePessoaJuridica extends Cliente{
    public int $cnpj;
    public string $nomeFantasia;

    public function verInformacaoUsuario():string
    {
        $dados = "Endereço da pessoa física<br>";
        $dados .= "Endereço: {$this->logradouro}<br>";;
        $dados .= "Bairro: {$this->bairro}<br>";
        $dados .= "Nome Fantasia: {$this->nomeFantasia}<br>";
        $dados .= "CNPJ: {$this->cnpj}<br>";

        return "<p>$dados</p>";
    }
}