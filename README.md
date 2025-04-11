<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to use

## Getting Started

1. Install all dependencies `composer install`
2. Install npm package `npm install` and `npm run build`
3. Create a new .env file `cp .env.example .env`
4. Generate a secret key `php artisan key:generate`
5. Run migrations `php artisan migrate`
6. Run seeder

    ```bash
    php artisan db:seed

    php artisan db:seed --class=MajorsSeeder

    php artisan db:seed --class=StudentSeeder
    ```

7. Serve the application `composer run dev`
