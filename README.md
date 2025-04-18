# Laravel Project

This is a Laravel-based web application.

## Requirements

- PHP 8.x
- Composer
- MySQL / PostgreSQL
- Node.js & NPM

## Setup

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install && npm run dev
php artisan serve
