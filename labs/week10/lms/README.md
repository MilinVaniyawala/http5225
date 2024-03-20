# Project Setup Guide

This guide will walk you through setting up the project environment and creating necessary components for managing courses in a Laravel application.

## Setting Up Environment

1. **.env File:** Uncomment Database Code. Change `sqlite` to `mysql`.

2. **Migrate Database:** Run the command `php artisan migrate:refresh`. It will migrate the database to MySQL.

## Creating Courses

1. **Create Migration for Courses:**

    - Run `php artisan make:migration create_courses_table`.
    - This will generate a migration file in `database -> migrations -> xxxxx_create_courses_table.php`.
    - Modify the generated migration file to have the desired structure for the courses table:
        ```php
        // Structure of the table
        $table->string('courseID');
        $table->string('name');
        ```

2. **Create Factory for Course:**

    - Run `php artisan make:factory Course`.
    - Navigate to `database -> factories -> CourseFactory.php` and adjust as necessary.

3. **Create Model for Course:**

    - Run `php artisan make:model Course`.
    - Add the following code in `app/Models/Course.php`:
        ```php
        protected $fillable = [
            'courseID',
            'name',
        ];
        ```

4. **Seed Courses:**
    - Navigate to `database -> seeders -> DatabaseSeeder.php`.
    - Add seed data for courses:
        ```php
        Course::factory()->create([
            'courseID' => 'HTTP 5225',
            'name' => 'PHP',
        ]);
        // Add more courses as needed
        ```
    - Run `php artisan migrate:refresh --seed` to seed the database.

## Creating Templates

1. **Modify Default Laravel Files:**

    - Update `resources -> views -> welcome.blade.php`.
    - Update `resources -> routes -> web.php` for routing.

2. **Create New Blade Files:**

    - Create `home.blade.php` under `resources -> views`.
    - Create a `layouts` folder under `resources -> views`.
    - Create `admin.blade.php` under `layouts`.

3. **Set Up Routing:**

    - Modify `web.php` to specify the file paths for routing:
        ```php
        Route::get('/', function () {
            return view('home');
        });
        ```

4. **Create Controllers:**

    - Run `php artisan make:controller HomeController --resource`.
    - Implement the `index()` method in `HomeController` to return the `home` view.
    - Run `php artisan make:controller CourseController --resource`.

5. **Create Views for Courses:**

    - Create a folder named `courses` under `resources -> views`.
    - Create `index.blade.php` under `resources -> views -> courses`.

6. **Fetch All Courses:**
    - Implement necessary logic in `CourseController.php` to fetch all courses and pass them to the `index` view.

Follow these steps to set up and manage courses in your Laravel application.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
