<?php

namespace Estudo\Banco\Model;

class Endereco 

{
    private string $cep;
    private string $numero;
    private string $rua;
    private string $bairro;
    private string $cidade;
    private string $estado;


    public function __construct(string $cep, string $numero, string $rua, string $bairro, string $cidade, string $estado){

        $this->cep    = $cep;
        $this->rua    = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
    } 
    
    public function getcep(): string
    {
        return $this->cep;
    }
    public function getnumero(): string
    {
        return $this->numero;
    }
    public function getrua(): string
    {
        return $this->rua;
    }
    public function getbairro(): string
    {
        return $this->bairro;
    }
    public function getcidade(): string
    {
        return $this->cidade;
    }
    public function getestado(): string
    {
        return $this->estado;
    }


    public function getEnderecoCompleto(): string 
    {
        return $this->rua . ", " . $this->numero . ", " . $this->bairro . ", " . $this->cidade . ", " . $this->estado . ", " . $this->cep;
    }


    
}

   

