# Week 9: Laravel Installation & Database Setup Guide

Welcome to the guide for setting up Laravel and configuring the database environment. Follow these steps to get started with Laravel efficiently.

## Steps

1. **Install Laravel:**

    ```bash
    composer create-project laravel/laravel:^10.0 laracms
    cd laracms
    php artisan serve
    ```

2. **Set Up Database Connection in .env File:**

    - Before connecting, create a database named "laracms" in phpMyAdmin.
    - Edit your `.env` file with the following database details:
        ```dotenv
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laracms
        DB_USERNAME=root
        DB_PASSWORD=
        ```

3. **Create Database Table:**

    - Generate a migration file for creating the students table:
        ```bash
        php artisan make:migration create_students_table
        ```
    - Open the generated migration file and add desired fields like `fname`, `lname`, `grade`, and `image`.

4. **Run Migrations:**

    - Execute the migration command to create the table in the database:
        ```bash
        php artisan migrate
        ```

5. **Create Model:**

    - Generate a model named Student:
        ```bash
        php artisan make:model Student
        ```

6. **Create Factory:**

    - Generate a factory for the Student model:
        ```bash
        php artisan make:factory Student
        ```
    - Customize the factory file to define data attributes.

7. **Seed Database:**

    - Edit the `DatabaseSeeder.php` file to add seed data.
    - Run the following command to seed the database:
        ```bash
        php artisan migrate:refresh --seed
        ```

8. **Verify Laravel Folder Structure:**
    - Check the Laravel folder structure, particularly the migrations and models directories.

## Additional Information

-   Laravel is a web application framework known for its expressive, elegant syntax.
-   It simplifies common web development tasks and provides various features like routing, database ORM, background job processing, etc.
-   Laravel offers extensive documentation and tutorials for learning the framework.
-   Laracasts provides video tutorials covering Laravel, PHP, unit testing, and JavaScript.
-   Laravel is open-source software licensed under the MIT license.

For more details about Laravel, visit the [official documentation](https://laravel.com/docs).

---

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>
