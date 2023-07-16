<?php

class Conexao
{
    public static function pegarConexao()
    {
        $conexao = new PDO('mysql:host=localhost:3306;dbname=estoque', 'root', '');
        return $conexao;
    }
}

?>