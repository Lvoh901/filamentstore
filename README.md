# Hotel Management System

This is a web application built with the Laravel framework for managing hotel or property-related operations. It provides a comprehensive system for handling rooms, bookings, guests, amenities, and services.

The project utilizes the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Livewire) and the Filament admin panel to offer a modern and reactive user interface for seamless management.

## Key Features

-   **Room Management:** Add, edit, and manage room details, including type, capacity, and pricing.
-   **Booking Management:** Create, view, and update bookings with guest information and stay dates.
-   **Guest Management:** Maintain a record of guests, their contact details, and booking history.
-   **Amenity and Service Management:** Define and manage amenities and services offered by the hotel.
-   **User Roles and Permissions:** Control access to different features based on user roles.

## Getting Started

Follow these instructions to get the project up and running on your local machine.

### Prerequisites

Ensure you have the following installed on your system:

-   **PHP** >= 8.2 (ensure `pdo_mysql` extension is enabled in `php.ini`)
-   **Composer** (PHP Dependency Manager)
-   **Node.js** & **NPM** (JavaScript Package Manager)
-   **MySQL** Database Server

### Installation

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/filamentstore.git
    cd filamentstore
    ```

2.  **Install Backend Dependencies:**

    ```bash
    composer install
    ```

3.  **Install Frontend Dependencies:**

    ```bash
    npm install
    ```

4.  **Environment Configuration:**

    Copy the example environment file and configure it:

    ```bash
    cp .env.example .env
    ```

    Open `.env` and set your database credentials:

    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5.  **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

6.  **Database Setup:**

    Make sure your MySQL server is running and the database specified in `.env` exists.

    Run migrations to create tables:
    ```bash
    php artisan migrate
    ```

    (Optional) Seed the database with initial data:
    ```bash
    php artisan db:seed
    ```

7.  **Link Storage:**

    Link the public storage directory to make uploaded files accessible:
    ```bash
    php artisan storage:link
    ```

8.  **Build Frontend Assets:**

    Generate the Vite manifest and assets:
    ```bash
    npm run build
    ```

### Running the Application

To run the application locally, you can use the helper command defined in `composer.json` which starts the Laravel server, Queue worker, and Vite dev server simultaneously:

```bash
composer run dev
```

Alternatively, you can run the services manually in separate terminal windows:

**Laravel Server:**
```bash
php artisan serve
```

**Vite Development Server:**
```bash
npm run dev
```

**Queue Listener (for background jobs):**
```bash
php artisan queue:listen
```

Access the application at `http://localhost:8000`.

## Troubleshooting

### "could not find driver"
This usually refers to the missing MySQL driver for PHP.
1. Locate your `php.ini` file (run `php --ini` to find it).
2. Open it and find `;extension=pdo_mysql`.
3. Remove the semicolon `;` to uncomment it: `extension=pdo_mysql`.
4. Save and restart your terminal/server.

### "Vite manifest not found"
This means the frontend assets haven't been built.
Run the following command:
```bash
npm run build
```

## Filament Resources

The `app/Filament/Resources` directory contains the Filament resources for the following models:

-   `Amenity`
-   `Booking`
-   `Guest`
-   `Room`
-   `Service`
-   `User`

These resources provide a complete CRUD interface for managing the corresponding models.

## Development Conventions

This project uses Laravel Pint for code styling. To format your code, run the following command:

```bash
./vendor/bin/pint
```
