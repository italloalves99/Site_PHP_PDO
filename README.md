# Site PHP - CRUD

Um CRUD simples desenvolvido em PHP.

## Sobre

O projeto inclui um arquivo `banco_de_dados.php` responsável por configurar e estabelecer uma conexão com um banco de dados usando o PDO (PHP Data Objects).

## Requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados:

- PHP (versão 8)

## Configuração do Banco de Dados

Certifique-se de configurar as informações do seu banco de dados no arquivo `banco_de_dados.sql`. Modifique as seguintes variáveis no arquivo `banco_de_dados.php`:

```php
$host = 'localhost';
$db   = 'estoque';
$user = 'root';
$pass = '';
