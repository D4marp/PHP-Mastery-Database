# Complete Documentation - Student Management System

## Table of Contents
1. [Overview](#overview)
2. [Installation](#installation)
3. [Features](#features)
4. [Project Architecture](#project-architecture)
5. [File Descriptions](#file-descriptions)
6. [Database Schema](#database-schema)
7. [API Routes](#api-routes)
8. [Code Examples](#code-examples)
9. [Common Tasks](#common-tasks)
10. [Troubleshooting](#troubleshooting)

---

## Overview

**Student Management System** is a simple, educational Laravel application that demonstrates full CRUD (Create, Read, Update, Delete) operations for managing student records. Built with Laravel 12 and Bootstrap 5, it showcases best practices in web development and database management.

**Key Technologies:**
- PHP 8.2+
- Laravel 12.51
- SQLite Database
- Bootstrap 5 UI Framework
- Blade Templating Engine

**Audience:** Engineering students learning database management, web development, and Laravel framework.

---

## Installation

### Prerequisites
- PHP 8.2 or higher
- Composer package manager
- macOS, Linux, or Windows with terminal access

### Step-by-Step Setup

#### 1. Extract Project
```bash
cd /Users/HCMPublic/Kuliah/ENgineering\ edu/PHP\ materi/student-management-system
```

#### 2. Install Dependencies
```bash
composer install
```
*This installs all PHP packages defined in composer.json*

#### 3. Setup Environment File
```bash
cp .env.example .env
```
*The .env file is already configured, but you can modify it if needed*

#### 4. Generate Application Key
```bash
php artisan key:generate
```
*Already done during project creation*

#### 5. Run Database Migrations
```bash
php artisan migrate
```
*Creates the database tables*

#### 6. Seed Sample Data
```bash
php artisan db:seed
```
*Populates the database with 5 sample students*

#### 7. Start Development Server
```bash
php artisan serve
```

```
 INFO  Server running on [http://127.0.0.1:8000].

  Press Ctrl+C to stop the server
```

#### 8. Access Application
Open browser and visit: **http://127.0.0.1:8000/students**

---

## Features

### ✅ Core CRUD Operations

#### **Create (Add)**
- User-friendly form to add new students
- Validation for all required fields
- Automatic unique constraint checking
- Form error feedback

#### **Read (View)**
- List all students in table format
- View individual student details
- Display timestamps (created/updated)
- Search and filter capability (extensible)

#### **Update (Edit)**
- Edit any student information
- Pre-filled forms with current data
- Validation on update
- Change history tracking via timestamps

#### **Delete (Remove)**
- Confirmation dialog before deletion
- Permanent removal from database
- Safe deletion with CSRF protection

### ✅ User Interface
- Responsive Bootstrap 5 design
- Navigation bar with quick links
- Professional styling
- Mobile-friendly layout
- Success/error message alerts

### ✅ Data Validation
- Required field validation
- Unique NIM and Email constraints
- Email format validation
- Server-side validation with error messages

### ✅ Database Features
- SQLite relational database
- Automatic timestamps
- Primary key auto-increment
- Unique indexes
- Data integrity constraints

---

## Project Architecture

### MVC Pattern

```
┌─────────────────────────────────────────────────────────┐
│                     User Interface                      │
│                   (Blade Templates)                     │
│  ┌──────────────────────────────────────────────────┐   │
│  │ index.blade.php | create.blade.php | ...        │   │
│  └──────────────────────────────────────────────────┘   │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                 Routing & Controllers                   │
│  ┌──────────────────────────────────────────────────┐   │
│  │ StudentController.php                            │   │
│  │  - index()  - create()  - store()  - show()  ... │   │
│  └──────────────────────────────────────────────────┘   │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                    Models & Business Logic              │
│  ┌──────────────────────────────────────────────────┐   │
│  │ Student.php (Eloquent Model)                     │   │
│  └──────────────────────────────────────────────────┘   │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                      Database                           │
│  ┌──────────────────────────────────────────────────┐   │
│  │ database.sqlite                                  │   │
│  │  - students table                                │   │
│  │  - migrations table                              │   │
│  └──────────────────────────────────────────────────┘   │
└─────────────────────────────────────────────────────────┘
```

### Request Flow

1. **User clicks link/submits form**
2. **Route matches request** (web.php)
3. **Controller method executes** (StudentController)
4. **Model queries database** (Student)
5. **View renders with data** (Blade template)
6. **HTML sent to browser**

---

## File Descriptions

### Core Application Files

#### `routes/web.php`
Defines all URL routes for the application.
```php
Route::resource('students', StudentController::class);
```
Automatically creates 7 routes for CRUD operations.

#### `app/Http/Controllers/StudentController.php`
Main business logic controller with 7 methods:
- `index()` - List all students
- `create()` - Show create form
- `store()` - Save new student
- `show()` - View student details
- `edit()` - Show edit form
- `update()` - Update student
- `destroy()` - Delete student

#### `app/Models/Student.php`
Eloquent model representing the students table.
```php
protected $fillable = ['nim', 'name', 'email', 'phone', 'address', 'major'];
```

### Database Files

#### `database/migrations/2026_02_13_034957_create_students_table.php`
Creates students table with:
- id (Primary Key)
- nim (String, Unique)
- name (String)
- email (String, Unique)
- phone (String)
- address (String)
- major (String)
- timestamps

#### `database/seeders/StudentSeeder.php`
Populates database with 5 sample students.

#### `database/database.sqlite`
SQLite database file (auto-created).

### View Files

#### `resources/views/layouts/app.blade.php`
Master layout template with:
- Navigation bar
- Container styling
- Footer
- Bootstrap CSS/JS

#### `resources/views/students/index.blade.php`
Lists all students in table format.
- View, Edit, Delete buttons for each student
- Add New Student button
- Success messages

#### `resources/views/students/create.blade.php`
Form to create new student.
- 6 input fields
- Validation error display
- Submit button

#### `resources/views/students/edit.blade.php`
Form to edit existing student.
- Pre-filled form fields
- Validation error display
- Update button

#### `resources/views/students/show.blade.php`
Detailed view of single student.
- Display all fields
- Created/Updated timestamps
- Edit, Delete, Back buttons

### Configuration Files

#### `.env`
Environment configuration.
```
APP_NAME=Laravel
DB_CONNECTION=sqlite
```

#### `composer.json`
PHP dependencies and project metadata.

#### `composer.lock`
Locked versions of installed packages.

---

## Database Schema

### Students Table

```sql
CREATE TABLE students (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nim VARCHAR(255) NOT NULL UNIQUE,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    major VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

### Table Relationships

**No foreign keys** - This is intentionally simple for educational purposes.

### Indexes

- Primary Key: `id`
- Unique: `nim`
- Unique: `email`

---

## API Routes

### RESTful Routes

| HTTP | URI | Controller Method | Purpose |
|------|-----|------------------|---------|
| GET | `/students` | index() | List all students |
| GET | `/students/create` | create() | Show create form |
| POST | `/students` | store() | Save new student |
| GET | `/students/{id}` | show() | View student |
| GET | `/students/{id}/edit` | edit() | Show edit form |
| PUT/PATCH | `/students/{id}` | update() | Update student |
| DELETE | `/students/{id}` | destroy() | Delete student |

### View All Routes
```bash
php artisan route:list
```

---

## Code Examples

### Example 1: Creating a Student

**View (create.blade.php):**
```html
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="nim" required>
    <input type="text" name="name" required>
    <input type="email" name="email" required>
    <button type="submit">Add Student</button>
</form>
```

**Controller (StudentController.php):**
```php
public function store(Request $request)
{
    $validated = $request->validate([
        'nim' => 'required|unique:students',
        'name' => 'required',
        'email' => 'required|email|unique:students',
    ]);
    
    Student::create($validated);
    return redirect()->route('students.index')
        ->with('success', 'Student created successfully');
}
```

**Model (Student.php):**
```php
class Student extends Model
{
    protected $fillable = ['nim', 'name', 'email', 'phone', 'address', 'major'];
}
```

### Example 2: Displaying Students

**Controller:**
```php
public function index()
{
    $students = Student::all();
    return view('students.index', compact('students'));
}
```

**View:**
```html
@foreach($students as $student)
    <tr>
        <td>{{ $student->nim }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
    </tr>
@endforeach
```

### Example 3: Updating a Student

**Controller:**
```php
public function update(Request $request, Student $student)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students,email,'.$student->id,
    ]);
    
    $student->update($validated);
    return redirect()->route('students.index')
        ->with('success', 'Student updated successfully');
}
```

---

## Common Tasks

### Task 1: Add a New Field to Students

1. Create new migration:
```bash
php artisan make:migration add_gpa_to_students_table
```

2. Edit migration file:
```php
Schema::table('students', function (Blueprint $table) {
    $table->decimal('gpa', 3, 2)->nullable();
});
```

3. Run migration:
```bash
php artisan migrate
```

4. Update Student model:
```php
protected $fillable = [..., 'gpa'];
```

5. Update forms and views to include GPA field.

### Task 2: Add Search Functionality

```php
// In StudentController
public function index(Request $request)
{
    $query = Student::query();
    
    if ($request->search) {
        $query->where('name', 'like', '%'.$request->search.'%')
              ->orWhere('nim', 'like', '%'.$request->search.'%');
    }
    
    $students = $query->get();
    return view('students.index', compact('students'));
}
```

### Task 3: Add Pagination

```php
// In controller
public function index()
{
    $students = Student::paginate(10);
    return view('students.index', compact('students'));
}

// In view
{{ $students->links() }}
```

### Task 4: Export to CSV

```php
// In controller
public function export()
{
    $students = Student::all();
    $csv = "NIM,Name,Email,Phone\n";
    
    foreach ($students as $s) {
        $csv .= "{$s->nim},{$s->name},{$s->email},{$s->phone}\n";
    }
    
    return response($csv, 200, [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="students.csv"'
    ]);
}
```

---

## Troubleshooting

### Problem: "No such file or directory: database.sqlite"

**Solution:**
```bash
php artisan migrate
php artisan db:seed
```

### Problem: "CSRF token mismatch" on form submission

**Solution:** Ensure form includes `@csrf` directive:
```html
<form method="POST">
    @csrf
    <!-- form fields -->
</form>
```

### Problem: "Route [students.index] not defined"

**Solution:** Check route is defined in `routes/web.php`:
```php
Route::resource('students', StudentController::class);
```

### Problem: "Call to undefined method Student::create()"

**Solution:** Ensure Student model extends Model:
```php
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //...
}
```

### Problem: 500 Server Error

**Solution:**
```bash
# Check logs
tail -f storage/logs/laravel.log

# Clear cache
php artisan cache:clear
php artisan config:clear

# Restart server
php artisan serve
```

### Problem: Form validation not working

**Solution:** Ensure validation rules are correct in controller:
```php
$request->validate([
    'email' => 'required|email|unique:students,email,'.$student->id,
    // unique constraint ignores current record id
]);
```

---

## Performance Tips

1. **Use eager loading:**
   ```php
   Student::with('courses')->get();
   ```

2. **Add database indexes:**
   ```php
   $table->index('name');
   ```

3. **Use caching:**
   ```php
   Cache::remember('students', 3600, function () {
       return Student::all();
   });
   ```

4. **Optimize queries:**
   ```php
   // Bad
   foreach ($students as $s) {
       echo $s->course->name;
   }
   
   // Good
   $students->load('course');
   foreach ($students as $s) {
       echo $s->course->name;
   }
   ```

---

## Security Notes

1. **CSRF Protection** - All forms include `@csrf`
2. **SQL Injection** - Using Eloquent ORM prevents SQL injection
3. **Input Validation** - All inputs validated server-side
4. **Authentication** - Not implemented (educational project)
5. **Authorization** - Not implemented (would add roles/permissions)

---

## Further Learning

### Laravel Documentation
- Official Docs: https://laravel.com/docs
- Blade Templating: https://laravel.com/docs/blade
- Eloquent ORM: https://laravel.com/docs/eloquent

### Related Topics
- MVC Architecture Pattern
- RESTful API Design
- Database Normalization
- Web Security Best Practices
- Testing & Debugging

---

**Last Updated:** February 13, 2026
**Version:** 1.0
**Status:** Production Ready for Educational Use ✅
