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

##Steps & Approch
Create the Project
laravel new lara7

Create/Install API 
php artisan install:api

Create Controller,model,migration
php artisan make:controller ContactController
php artisan make:model Contact
php artisan make:migration Create_Contract_table

Add Routes & Controller
Set Up the job & Queue  
php artisan make:job SendWelcomeEmail

.env file
QUEUE_CONNECTION=database
php artisan queue:table
php artisan migrate
php artisan queue:work

Create a Mail File
php artisan make:mail WelcomeEmail


.env file setUp Mail
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=XXXXX
MAIL_PASSWORD=XXXXXX
MAIL_FROM_ADDRESS="no-reply@example.com"




