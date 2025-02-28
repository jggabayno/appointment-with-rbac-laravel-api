# Appointment Management System with RBAC (Laravel 8)

## Overview

A **Laravel 8-based appointment management system** with **Role-Based Access Control (RBAC)**. This application allows users to manage appointments, enforce access permissions based on user roles, and streamline employee scheduling.

## Key Features

- **Role-Based Access Control (RBAC)**: Restrict access to resources based on user roles (Admin, Employee).
- **User Management**: Admins can create, update, and delete users.
- **Appointment Scheduling**: Employees can view and manage appointments.
- **Working Hours Management**: Define and adjust employee working hours.
- **Authentication & Security**: Secure user authentication using Laravel Passport.

## Core Modules

- **Access Management**: Define and manage permissions.
- **Appointments**: Create, update, and manage appointments.
- **Employee Management**: Manage employee details and working schedules.
- **Employee Working Hours**: Track and modify employee availability.
- **User Access**: Assign roles and permissions to users.
- **Role Access**: Define role-based permissions.
- **User Management**: Manage users, including registration, login, and password resets.
- **Working Hours**: Configure employee working schedules.

## Requirements

- PHP 7.3+ or 8.0+
- Composer
- MySQL
- Node.js (for front-end assets)

## Installation

1. **Clone the Repository:**
   ```bash
   git clone using ssh or https
   cd appointment-with-rbac-laravel-v8
   ```

2. **Install Dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Set Up Environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure Database:**
   Edit the `.env` file to match your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run Migrations and Seed Data:**
   ```bash
   php artisan migrate --seed
   ```

6. **Start the Server:**
   ```bash
   php artisan serve
   ```

   The app will be accessible at `http://127.0.0.1:8000`.

## Usage

- **Admin Role**:
  - Manage users, roles, and permissions.
  - Configure employee working hours.
  - View and manage all appointments.
  
- **Employee Role**:
  - View assigned working hours.
  - Manage personal appointments.

## Testing

Run all tests:
```bash
php artisan test
```

Run a specific test:
```bash
php artisan test --filter TestClassName
```

## Conclusion

This appointment management system provides a **secure, role-based** solution for scheduling and managing appointments efficiently. Built with **Laravel 8**, it ensures **scalability, flexibility, and ease of use** for businesses handling multiple users and role-based access. Whether you are an **admin managing users** or an **employee tracking appointments**, this system streamlines the process with **robust authentication and access control**.