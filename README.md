# Agenda de Contatos

Este é um projeto simples de uma Agenda de Contatos, desenvolvido com o framework Laravel. Ele permite o cadastro, edição, busca e exclusão de contatos, armazenando informações como nome, email e telefone.

## Funcionalidades

- Cadastro de novos contatos.
- Edição de contatos existentes.
- Exibição de uma lista de contatos.
- Busca por nome de contato.
- Exclusão de contatos.

## Requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados:

- [PHP >= 8.0](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/)
- [Laravel >= 12.0](https://laravel.com/docs/12.x)
- [SQLite](https://www.sqlite.org/) ou [MySQL](https://www.mysql.com/) (dependendo da configuração)
- Um servidor web como Apache ou Nginx

## Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/thiagofogaca25/PHP-LARAVEL-Agenda-Contatos.git
cd PHP-LARAVEL-Agenda-Contatos
````

### 2. Instale as dependências do Composer

```bash
composer install
```

### 3. Configure o ambiente

Copie o arquivo `.env.example` para um novo arquivo `.env`:

```bash
cp .env.example .env
```

Se estiver usando SQLite, o banco de dados será automaticamente criado. Para MySQL, configure as credenciais no arquivo `.env`.

### 4. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 5. Execute as migrações (se estiver usando um banco de dados como MySQL)

```bash
php artisan migrate
```

Se estiver utilizando o SQLite, o banco será criado automaticamente.

### 6. Inicie o servidor local

```bash
php artisan serve
```

O aplicativo estará disponível em `http://localhost:8000`.

## Estrutura do Projeto

* **app/Models**: Contém o modelo `Contato` que interage com o banco de dados.
* **database/migrations**: Contém as migrações para a criação da tabela `contatos`.
* **resources/views**: Contém as views para criar, editar, listar e buscar contatos.

  * `contatos/create.blade.php`: Tela para criar um novo contato.
  * `contatos/edit.blade.php`: Tela para editar um contato existente.
  * `contatos/index.blade.php`: Tela para listar e buscar contatos.
* **routes/web.php**: Define as rotas para o CRUD de contatos.