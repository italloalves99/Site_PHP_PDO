<?php

require_once 'classes/Conexao.php';


class Categoria
{

    public $id;
    public $nome;

    // método construtor
    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
            $this->carregar();
        }

    }

    // método listar
    public function listar()
    {
        $query = "SELECT id, nome FROM categorias ORDER BY id";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    // método inserir
    public function inserir()
    {
        $query = "INSERT INTO categorias(nome) VALUES('". $this->nome ."')";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }

    // método atualizar
    public function atualizar()
    {
        $query = "UPDATE categorias set nome = '" . $this->nome . "' WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
   
    // método carregar
    public function carregar()
    {
        $query = "SELECT id, nome FROM categorias WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            $this->nome = $linha['nome'];
        }
    }

    // método carregar
    public function excluir()
    {
        $query = "DELETE FROM categorias WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
}