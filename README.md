# Hotel Management System

This is a web application built with the Laravel framework for managing hotel or property-related operations. It provides a comprehensive system for handling rooms, bookings, guests, amenities, and services.

The project utilizes the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Livewire) and the Filament admin panel to offer a modern and reactive user interface for seamless management.

## Key Features

- **Room Management:** Add, edit, and manage room details, including type, capacity, and pricing.
- **Booking Management:** Create, view, and update bookings with guest information and stay dates.
- **Guest Management:** Maintain a record of guests, their contact details, and booking history.
- **Amenity and Service Management:** Define and manage amenities and services offered by the hotel.
- **User Roles and Permissions:** Control access to different features based on user roles.

## Building and Running

### Prerequisites

- PHP >= 8.2
- Node.js
- Composer
- NPM

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/your-repository.git
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install NPM dependencies:**
   ```bash
   npm install
   ```

4. **Set up the environment file:**
   ```bash
   cp .env.example .env
   ```

5. **Generate an application key:**
   ```bash
   php artisan key:generate
   ```

6. **Create a database file:**
   ```bash
   touch database/database.sqlite
   ```

7. **Run database migrations:**
   ```bash
   php artisan migrate
   ```

### Development

To run the development server, which includes the Laravel server, queue worker, log watcher, and Vite server, use the following command:

```bash
composer run dev
```

Alternatively, you can run the servers individually:

- **Laravel server:**
  ```bash
  php artisan serve
  ```

- **Vite server:**
  ```bash
  npm run dev
  ```

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

## Filament Resources

The `app/Filament/Resources` directory contains the Filament resources for the following models:

- `Amenity`
- `Booking`
- `Guest`
- `Room`
- `Service`
- `User`

These resources provide a complete CRUD interface for managing the corresponding models.