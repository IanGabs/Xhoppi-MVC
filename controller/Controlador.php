<?php

require_once "../model/BandoDeDados.php";
require_once "../model/Produto.php";
require_once "../model/Cliente.php";
require_once "../model/Funcionario.php";

class Controlador{

    //Atributo
    private $bancoDeDados;

    public function __construct(){
        $this->bancoDeDados = new BandoDeDados("localhost","root","","xhopii");
    }

    /*
    public function __construct($host,$login,$senha,$database){
        $this->bancoDeDados = new BancoDeDados($host,$login,$senha,$database);
    }
    */

    public function cadastrarProduto($nome, $fabricante, $descricao, $valor){

        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function visualizarProdutos(){
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            return "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" . 
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }
    }

    public function cadastrarCliente($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $senha)
    {
        $cliente = new Cliente($cpf,$nome,$sobrenome,$dataNascimento,$telefone,$email,$senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }

}

?>