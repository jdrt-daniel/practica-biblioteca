<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/jdrt-daniel/practica-biblioteca"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
</p>

## About project

This project is a Laravel project that is used to practice the Laravel framework.
In this project, you will learn how to create a RESTful API using Laravel and how to use the Laravel framework to build a web application.

## Installation

You can install the project by following these steps:

1. Clone the project:

```bash
git clone https://github.com/jdrt-daniel/practica-biblioteca.git
```

2. Go to the project directory:

```bash
cd practica-biblioteca
```

3. Install the dependencies:

```bash
composer install
```

4. Create the database:

```bash
php artisan migrate:fresh --seed
```

esto generara datos de prueba, 10 libros, 10 autores y 200 prestamos

5. Run the application:

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`.

## Contributing

Thank you for considering contributing to the Laravel framework!

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
