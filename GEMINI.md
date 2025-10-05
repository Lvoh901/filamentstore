# GEMINI.md

## Project Overview

This is a web application built with the Laravel framework. It appears to be a hotel or property management system, with models for `Room`, `Booking`, `Guest`, `Amenity`, and `Service`.

The project uses the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Livewire) and the Filament admin panel.

## Building and Running

### Prerequisites

*   PHP >= 8.2
*   Node.js
*   Composer
*   NPM

### Installation

1.  Clone the repository.
2.  Install PHP dependencies: `composer install`
3.  Install NPM dependencies: `npm install`
4.  Copy the `.env.example` file to `.env`: `cp .env.example .env`
5.  Generate an application key: `php artisan key:generate`
6.  Create a database file: `touch database/database.sqlite`
7.  Run database migrations: `php artisan migrate`

### Development

To run the development server, which includes the Laravel server, queue worker, log watcher, and Vite server, run the following command:

```bash
composer run dev
```

Alternatively, you can run the servers individually:

*   Laravel server: `php artisan serve`
*   Vite server: `npm run dev`

### Testing

To run the test suite, use the following command:

```bash
composer test
```

## Development Conventions

This project uses Laravel Pint for code styling. To format your code, run the following command:

```bash
./vendor/bin/pint
```

## TODO

*   The `app/Filament/Resources` directory is empty. To use Filament, you will need to create resources for your models. For example, to create a resource for the `Room` model, you could run the following command:

    ```bash
    php artisan make:filament-resource Room
    ```
