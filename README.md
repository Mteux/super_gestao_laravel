# Meu Projeto Laravel

Projeto desenvolvido durante curso de Laravel, com evoluções contínuas.

## 🚀 Tecnologias
- PHP 8.2+
- Laravel 12
- MySQL


## 📋 Pré-requisitos
- PHP 8.2 ou superior
- Composer
- MySQL


## 🔧 Instalação

```bash
# Clone o repositório
git clone https://github.com/MTeux/super_gestao_laravel

# Entre na pasta
cd seu-projeto

# Instale as dependências
composer install
npm install

# Copie o .env.example
cp .env.example .env

# Gere a key
php artisan key:generate

# Configure o banco no .env e rode as migrations
php artisan migrate

# Inicie o servidor
php artisan serve
