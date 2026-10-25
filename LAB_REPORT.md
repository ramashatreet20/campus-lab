
# Laravel and GitHub Lab Report

## 1. Project Information

- Project Name: campus-lab
- Framework: Laravel 13.38.0
- PHP Version: 8.5.0
- Local URL: http://127.0.0.1:8080
- Git Branch: main

## 2. Lab Objectives

- Create and run a Laravel project.
- Connect the project to a GitHub repository.
- Use Git to track changes, commit, and push.
- Define GET, POST, PUT, and DELETE routes.
- Create controllers and connect them to routes.
- Test the routes and document the results.

## 3. Commands Used

### Check PHP Version
```powershell
php -v
```

### Check Laravel Version
```powershell
php artisan --version
```

### Run Laravel Server
```powershell
php artisan serve --host=127.0.0.1 --port=8080
```

### List Routes
```powershell
php artisan route:list
```

### Check Git Status
```powershell
git status
```

### Stage Changes
```powershell
git add .
```

### Commit Changes
```powershell
git commit -m "Add student and course controllers"
```

### Push Changes to GitHub
```powershell
git push origin main
```

## 4. Routes and Controllers

The project includes the following routes:

| Method | URL | Purpose |
|---|---|---|
| GET | /hello | Display a greeting |
| GET | /students | Display all students |
| GET | /students/5 | Display a student by ID |
| POST | /students | Test creating a student |
| PUT | /students/5 | Test updating a student |
| DELETE | /students/5 | Test deleting a student |
| GET | /courses/2/students | Display students in a course |

Controllers created:
- StudentController
- CourseController

## 5. Testing Results

| Request | Expected Response | Result |
|---|---|---|
| GET /hello | Hello Laravel | Passed |
| GET /students | All Students | Passed |
| GET /students/5 | Student ID: 5 | Passed |
| GET /courses/2/students | Students in Course: 2 | Passed |
| POST /students | Student Created Successfully | HTTP 200 OK |
| PUT /students/5 | Student 5 Updated Successfully | HTTP 200 OK |
| DELETE /students/5 | Student 5 Deleted Successfully | HTTP 200 OK |

All tested requests returned successful HTTP responses.

Note: These controllers currently return text responses for testing. They do not yet create, update, or delete actual database records.

## 6. GitHub

The project changes were committed and pushed to the GitHub repository.

Repository:
https://github.com/ramashatreet20/campus-lab

## 7. Security Note

The `.env` file is not tracked by Git.

A CSRF exception was configured for the student routes to test POST, PUT, and DELETE requests locally. This exception is for lab testing only and should be reviewed or removed before production deployment.

## 8. Conclusion

The Laravel project was configured and run locally. Routes and controllers were created and tested using the REST Client extension. Git was used to track project changes and push them to GitHub.
