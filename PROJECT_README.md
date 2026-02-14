# Student Management System - Laravel Mini Project

This is a simple Laravel-based **Student Management System** created for educational purposes. It demonstrates fundamental Laravel concepts like Models, Controllers, Routes, Migrations, and Views.

## Features

✅ **CRUD Operations**
- Create new students
- Read/View student details
- Update student information
- Delete students

✅ **Database Management**
- SQLite database (automatic setup)
- Student table with fields: NIM, Name, Email, Phone, Address, Major
- Timestamps for created/updated records

✅ **User Interface**
- Bootstrap 5 responsive design
- Simple and clean interface
- Form validation
- Success/error messages

## Project Structure

```
student-management-system/
├── app/
│   ├── Models/
│   │   └── Student.php              # Student model with fillable attributes
│   └── Http/
│       └── Controllers/
│           └── StudentController.php # CRUD controller
├── database/
│   └── migrations/
│       └── 2026_02_13_034957_create_students_table.php  # Database schema
├── routes/
│   └── web.php                      # Route definitions
└── resources/
    └── views/
        ├── layouts/
        │   └── app.blade.php        # Main layout template
        └── students/
            ├── index.blade.php      # List all students
            ├── create.blade.php     # Add new student form
            ├── edit.blade.php       # Edit student form
            └── show.blade.php       # View student details
```

## Installation & Setup

### 1. Install Dependencies
```bash
cd student-management-system
composer install
```

### 2. Generate Application Key (Already Done)
```bash
php artisan key:generate
```

### 3. Run Database Migrations (Already Done)
```bash
php artisan migrate
```

### 4. Start Development Server
```bash
php artisan serve
```

The application will be available at: **http://127.0.0.1:8000**

## Usage

1. **View All Students**
   - Navigate to `/students` or click "All Students" in the navigation

2. **Add New Student**
   - Click "Add Student" button or go to `/students/create`
   - Fill in the form with student details
   - Click "Add Student" to save

3. **View Student Details**
   - Click "View" button in the students table
   - See all student information

4. **Edit Student**
   - Click "Edit" button next to student
   - Modify the information
   - Click "Update Student" to save changes

5. **Delete Student**
   - Click "Delete" button and confirm
   - Student will be permanently removed from database

## Database Fields

| Field   | Type     | Description              |
|---------|----------|--------------------------|
| id      | Integer  | Primary Key (Auto)       |
| nim     | String   | Student ID (Unique)      |
| name    | String   | Full Name                |
| email   | String   | Email Address (Unique)   |
| phone   | String   | Phone Number             |
| address | String   | Home Address             |
| major   | String   | Study Major/Program      |
| created_at | Timestamp | Record Created Date    |
| updated_at | Timestamp | Record Updated Date    |

## Learning Points

This project demonstrates:

1. **Laravel Architecture**
   - MVC pattern implementation
   - Route resource binding

2. **Database Operations**
   - Migrations for schema creation
   - Eloquent ORM for data manipulation

3. **Form Handling**
   - Request validation
   - CSRF protection
   - Error display

4. **View Templates**
   - Blade templating
   - Data binding
   - Control structures (foreach, if)

5. **Routing**
   - RESTful resource routes
   - Named routes
   - Route model binding

## Requirements

- PHP 8.2+
- Composer
- SQLite (built-in)
- Laravel 12.x

## Notes

- This is a simple educational project
- Uses SQLite database (database.sqlite)
- No authentication implemented
- Bootstrap 5 for styling
- All validations are handled on the server side

## Next Steps to Enhance

- Add user authentication
- Implement API endpoints
- Add filtering and search
- Add pagination
- Create database seeder for sample data
- Add import/export functionality
- Implement role-based access control

---

**Created for**: Engineering Education Seminar - Database Management Workshop
**Date**: February 2026
