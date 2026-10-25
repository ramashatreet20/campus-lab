
# Campus Lab

A Laravel project created for the Laravel and GitHub lab.

## Project Information

- **Project Name:** campus-lab
- **Framework:** Laravel 13.38.0
- **PHP Version:** 8.5.0

## Requirements

- PHP
- Composer
- Git

## How to Run the Project

1. Clone or download the repository.
2. Open a terminal in the project directory.
3. Install the PHP dependencies:

   ```bash
   composer install
   ```

4. Create a local environment file:

   ```bash
   cp .env.example .env
   ```

   On Windows PowerShell, use:

   ```powershell
   Copy-Item .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Start the development server:

   ```bash
   php artisan serve --host=127.0.0.1 --port=8080
   ```

7. Open the application in your browser:

   http://127.0.0.1:8080

## Routes

| Method | URL | Description |
|---|---|---|
| GET | `/hello` | Returns Hello Laravel |
| GET | `/students` | Returns All Students |
| GET | `/students/{id}` | Displays the student ID |
| POST | `/students` | Tests student creation |
| PUT | `/students/{id}` | Tests student update |
| DELETE | `/students/{id}` | Tests student deletion |
| GET | `/courses/{courseId}/students` | Displays the course ID |

## Controllers

- `StudentController`
- `CourseController`

## Testing

The routes were tested locally using a browser and the REST Client extension in Visual Studio Code.

The current controllers return text responses for testing. They do not perform database operations.

## Security

The `.env` file contains local configuration and must not be committed to GitHub.

The CSRF exception in this lab is intended for local testing only and must be reviewed before production deployment.
