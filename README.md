<<<<<<< HEAD
=======
<<<<<<< HEAD
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


=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 83dbe0a (primeiro commit)
>>>>>>> 2beba9a (primeiro commit)
