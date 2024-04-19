# API de Gerenciamento de Usuários e Endereços

Esta API fornece um sistema de gerenciamento de usuários, endereços, cidades e estados. O sistema foi desenvolvido em duas versões: PHP Puro e Laravel, utilizando o MySQL como sistema de banco de dados.

## Requisitos

- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Composer (para a versão Laravel)
- Servidor web como Apache ou Nginx

## Configuração Inicial

### Banco de Dados

1. Crie um banco de dados MySQL:
   ```sql
   CREATE DATABASE user_management;
   ``` 
  ## Versão PHP Puro
- Clone o repositório para seu servidor local ou de produção.
- Configure sua conexão de banco de dados no arquivo config.php.
- Aponte seu servidor web para a pasta do projeto.

## Versão Laravel
- Clone o repositório e mude para a branch do Laravel.
- Instale as dependências com Composer:
 ```sql
composer install
 ``` 
-  Copie o arquivo .env.example para .env e configure sua conexão de banco de dados e outras variáveis de ambiente.

- Gere a chave da aplicação:
 ```sql
php artisan key:generate
 ``` 
- Execute as migrations para criar as tabelas:
 ```sql
php artisan migrate
``` 

