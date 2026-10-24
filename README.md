# Student Manager — Laravel Midterm Laboratory Examination

**Student Name:** [Your Full Name]  
**Subject:** MIT Web-Based Programming  
**Project Name:** `lab-exam-urbis`

## About the Project

Student Manager is a Laravel web application developed for the Web-Based Programming Midterm Laboratory Examination. It manages student records and courses and implements authentication, authorization, and API authentication using Laravel Sanctum.

## Features

- Student CRUD operations: create, view, edit, and delete student records
- Course and Student models with Eloquent relationships
- Input validation for student information
- User registration, login, and logout
- Authentication middleware for student routes
- Student ownership authorization using StudentPolicy
- Edit and Delete buttons restricted using Laravel `@can`
- API token creation using Laravel Sanctum
- Protected API endpoint for retrieving students and their courses

## Technologies Used

- PHP
- Laravel
- SQLite
- Blade Templates
- Eloquent ORM
- Laravel Sanctum
- Git and GitHub

## Requirements

- PHP
- Composer
- Git

## Installation and Setup

1. Clone the repository:

   ```bash
   git clone YOUR_GITHUB_REPOSITORY_URL
   cd lab-exam-urbis
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Create your environment file in Windows PowerShell:

   ```powershell
   Copy-Item .env.example .env
   ```

4. Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Configure SQLite in `.env`:

   ```env
   DB_CONNECTION=sqlite
   ```

   Make sure `database/database.sqlite` exists. Create the empty file if needed.

6. Run database migrations:

   ```bash
   php artisan migrate --seed
   ```

7. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

8. Open the application at:

   http://127.0.0.1:8000

9. Register an account or log in to access the Student Manager.

## API Endpoints

| Method | Endpoint | Description |
|---|---|---|
| POST | `/api/tokens/create` | Creates an API token using account credentials |
| GET | `/api/students` | Returns students and their courses as JSON; requires a valid Sanctum token |

## Security

The `.env` file must not be committed to GitHub. It contains local environment settings and may contain sensitive information. Each user should create their own `.env` file using `.env.example`.

## Author

Von
