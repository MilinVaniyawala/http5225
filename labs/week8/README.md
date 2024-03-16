# Week 8: Laravel Installation & Introduction

## Overview

In this session, we'll delve into the fundamentals of Laravel, covering its installation, basic features, and advantages over traditional PHP development.

### What we'll cover:

-   Basic Introduction to Laravel
-   Laravel's Role in the Industry
-   Advantages of Laravel over PHP
-   Understanding Laravel's File Structure

### Important Notes:

-   Prior to installation on Windows, make some necessary adjustments.
-   Configure Environment Path for PHP:
    -   If you have XAMPP, LAMP, or MAMP installed, provide the PHP path in your environment variable "PATH".
    -   If not, download PHP separately and specify its path.
-   Make changes in php.ini:
    -   Enable the following lines:
        -   `;extension=pdo_mysql`
        -   `;extension=fileinfo`
        -   `;extension=zip`
    -   Remove the semi-colon:
        -   `extension=pdo_mysql`
        -   `extension=fileinfo`
        -   `extension=zip`

## About Laravel

[Laravel](https://laravel.com) is a renowned web application framework celebrated for its expressive and elegant syntax. It emphasizes a delightful and creative development experience, streamlining common tasks prevalent in numerous web projects. Some of its notable features include:

-   Simple, fast routing engine
-   Powerful dependency injection container
-   Multiple back-ends for session and cache storage
-   Expressive, intuitive database ORM
-   Database agnostic schema migrations
-   Robust background job processing
-   Real-time event broadcasting

Laravel stands out for its accessibility, robustness, and provision of tools necessary for building large-scale applications.

## Learning Resources

Laravel offers extensive documentation and video tutorial library, making it easy to get started with the framework. Here are some recommended resources:

-   [Official Documentation](https://laravel.com/docs)
-   [Laravel Bootcamp](https://bootcamp.laravel.com) - Guided tutorials for building Laravel applications from scratch
-   [Laracasts](https://laracasts.com) - Thousands of video tutorials covering Laravel, PHP, unit testing, and JavaScript

## Laravel Sponsors

We extend our gratitude to the following sponsors for their contribution to Laravel's development:

### Premium Partners

-   Vehikl
-   Tighten Co.
-   WebReinvent
-   Kirschbaum Development Group
-   64 Robots
-   Curotec
-   Cyber-Duck
-   DevSquad
-   Jump24
-   Redberry
-   Active Logic
-   byte5
-   OP.GG

## Contributing & Code of Conduct

We welcome contributions to the Laravel framework. Please review and abide by our [Contribution Guide](https://laravel.com/docs/contributions) and [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct) to ensure a welcoming environment for all.

## Security & Licensing

For any security vulnerabilities discovered within Laravel, please contact Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). Laravel is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
