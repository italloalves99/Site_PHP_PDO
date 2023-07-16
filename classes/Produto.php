<?php

require_once 'classes/Conexao.php';


class Produto
{
    public $id;
    public $categoria_id;
    public $preco;
    public $produto;
    public $nome;

    // método construtor
    public function __construct($id = false)
    {
        if ($id ) {
            $this->id = $id;
            $this->carregar();
        }

    }

    // método listar
    public function listar()
    {
        $query = "SELECT * from  produtos ORDER BY id";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    // método inserir
    public function inserir()
    {
        $query = "INSERT INTO produtos(id,nome,preco,quantidade,categoria_id) VALUES(null,'". $this->nome ."','". $this->preco ."','". $this->quantidade ."','". $this->categoria_id ."')";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }

    // método atualizar
    public function atualizar()
    {
        $query = "UPDATE produtos set nome = '" . $this->nome . "', preco = '" . $this->preco . "', quantidade = '" . $this->quantidade . "', categoria_id = '" . $this->categoria_id . "' WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
   
    // método carregar
    public function carregar()
    {
        $query = "SELECT  * FROM  produtos WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            $this->nome = $linha['nome'];
            $this->preco = $linha['preco'];
            $this->quantidade = $linha['quantidade'];
            $this->categoria_id = $linha['categoria_id'];
        }
    }

    // método carregar
    public function excluir()
    {
        $query = "DELETE FROM produtos WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }

    //listar produtos por categoria
    public function ListCat()
    {
        $query = "SELECT * FROM  produtos WHERE categoria_id = " . $this->categoria_id;
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}