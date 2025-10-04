# API de Gerenciamento de Tarefas com PHP-Laravel

Uma API RESTful robusta e escalável para gerenciamento de tarefas, construída com PHP e Laravel. Este projeto demonstra as melhores práticas de desenvolvimento de API, incluindo autenticação, validação, tratamento de erros e testes automatizados.

## 🖼️ Imagem Hero

![Imagem Hero da API de Gerenciamento de Tarefas com PHP-Laravel](docs/hero-image.png)

## ✨ Funcionalidades

- **Autenticação de Usuários**: Sistema completo de registro e login com Sanctum.
- **CRUD de Tarefas**: Crie, leia, atualize e exclua tarefas.
- **Validação de Dados**: Validação robusta de todas as entradas da API.
- **Tratamento de Erros**: Tratamento de erros padronizado e informativo.
- **Testes Automatizados**: Testes unitários e de funcionalidades com PHPUnit.

## 🚀 Tecnologias Utilizadas

![PHP](https://img.shields.io/badge/PHP-8.1+-8892BF.svg?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630.svg?style=for-the-badge&logo=composer&logoColor=white)
![PHPUnit](https://img.shields.io/badge/PHPUnit-1572B6.svg?style=for-the-badge&logo=phpunit&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032.svg?style=for-the-badge&logo=git&logoColor=white)

## 🔧 Instalação e Execução

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/galafis/PHP-Laravel-API.git
    ```
2.  **Navegue até o diretório do projeto:**
    ```bash
    cd PHP-Laravel-API
    ```
3.  **Instale as dependências do Composer:**
    ```bash
    composer install
    ```
4.  **Configure o arquivo de ambiente:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5.  **Configure as credenciais do banco de dados no arquivo `.env` e execute as migrações:**
    ```bash
    php artisan migrate
    ```
6.  **Inicie o servidor de desenvolvimento:**
    ```bash
    php artisan serve
    ```

## 🧪 Executando os Testes

```bash
php artisan test
```

## ✒️ Autor

**Gabriel Demetrios Lafis**

---

# Task Management API with PHP-Laravel

A robust and scalable RESTful API for task management, built with PHP and Laravel. This project demonstrates best practices for API development, including authentication, validation, error handling, and automated testing.

## 🖼️ Hero Image

![Hero Image of the Task Management API with PHP-Laravel](docs/hero-image.png)

## ✨ Features

- **User Authentication**: Complete registration and login system with Sanctum.
- **Task CRUD**: Create, read, update, and delete tasks.
- **Data Validation**: Robust validation of all API inputs.
- **Error Handling**: Standardized and informative error handling.
- **Automated Tests**: Unit and feature tests with PHPUnit.

## 🚀 Technologies Used

![PHP](https://img.shields.io/badge/PHP-8.1+-8892BF.svg?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630.svg?style=for-the-badge&logo=composer&logoColor=white)
![PHPUnit](https://img.shields.io/badge/PHPUnit-1572B6.svg?style=for-the-badge&logo=phpunit&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032.svg?style=for-the-badge&logo=git&logoColor=white)

## 🔧 Installation and Execution

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/galafis/PHP-Laravel-API.git
    ```
2.  **Navigate to the project directory:**
    ```bash
    cd PHP-Laravel-API
    ```
3.  **Install Composer dependencies:**
    ```bash
    composer install
    ```
4.  **Configure the environment file:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5.  **Configure database credentials in the `.env` file and run migrations:**
    ```bash
    php artisan migrate
    ```
6.  **Start the development server:**
    ```bash
    php artisan serve
    ```

## 🧪 Running the Tests

```bash
php artisan test
```

## ✒️ Author

**Gabriel Demetrios Lafis**

