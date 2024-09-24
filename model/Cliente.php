<?php

class Cliente{
    private $cpf;
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $telefone;
    private $email;
    private $senha;

    public function __construct($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $senha)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function get_Cpf()
    {
        return($this->cpf);
    }

    public function set_Cpf()
    {
        $this->cpf = $Cpf;
    }

    public function get_Nome()
    {
        return($this->nome);
    }

    public function set_Nome()
    {
        $this->nome = $Nome;
    }

    public function get_Sobrenome()
    {
        return($this->nome);
    }
}

?>