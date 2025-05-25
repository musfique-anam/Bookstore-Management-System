# 📚 Book Management System

A structured and scalable Laravel-based application designed to manage book records efficiently.  
This system is suitable for use in libraries, institutions, and personal inventory systems.

---

## 🎥 Demo Video

📺 [Watch the live demo](https://your-demo-link.com)

The video provides an overview of features, system behavior, and usage workflow.

---

## 🚀 Project Overview

The Book Management System is a complete Laravel CRUD application.  
It provides robust functionality for:

- ✅ Creating new book records with validation  
- 📋 Paginated listing of all stored books  
- 🖥️ Displaying detailed information about individual entries  
- 📝 Editing and updating book data  
- 🗑️ Secure deletion of records  

The application follows the Model-View-Controller (MVC) architecture to ensure clarity, maintainability, and extensibility.


## ✨ Key Features

- Form validation for data integrity  
- Server-side pagination for scalable performance  
- Row number indicators for tabular listings  
- View, update, and delete operations from a single interface  
- Modular layout with reusable Blade components  
- Responsive user interface compatible with all devices  


## 📁 File & Structure Overview

```plaintext
├── routes/web.php                 # Web route definitions
├── app/Http/Controllers/
│   └── BookController.php        # Main controller handling logic
├── app/Models/Book.php           # Book Eloquent model
├── resources/views/books/
│   ├── index.blade.php           # Book list interface
│   ├── create.blade.php          # Book creation form
│   ├── edit.blade.php            # Book update form
│   └── show.blade.php            # Detailed view page
```
## 🛠 Technology Stack

- Framework: Laravel 10

- Templating Engine: Blade

- Database: MySQL / MariaDB

- Frontend Styling: Bootstrap

### Tools Used: Composer, Artisan Console, Laravel Tinker

## 🔧 System Setup Guide
### ⚙️ Requirements
- PHP 8.x

- Composer

- MySQL or MariaDB

- Laravel CLI

- Laragon or equivalent local server

## 💻 Installation Steps
### Clone the repository:


```
git clone https://github.com/musfique-anam/Bookstore-Management-System.git
cd Bookstore-Management-System
```
### Install PHP dependencies:
```
composer install
```
### Create .env file and generate application key:
```
cp .env.example .env
php artisan key:generate
```
### Update the .env file with your database credentials:
```
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
### Run database migrations:
```
php artisan migrate
```
### Start the application:
```
php artisan serve
```
### Open your browser at http://localhost:8000

## 🖥️ Local Development (Using Laragon)
- Apache and MySQL were initialized through Laragon

- Laravel’s built-in server served the app via php artisan serve

### Application was accessible at localhost:8000

## 📦 Deployment Notes
- Ensure PHP, MySQL, and all environment dependencies match the local development version

- Use environment variables (.env) for deployment configuration

- Migrate the database and configure file permissions as per server OS

- For production, consider enabling caching for routes, config, and views

## 🎯 Use Case Applications
- Library inventory management

- Academic institutions for tracking course materials

- Internal knowledgebase resources

- Digital repositories for personal collections

## ✍️ Author
### Your Name
> 📧 your.email@example.com


## 📜 License
> This project is open-sourced under the MIT License.
You are free to use, modify, and distribute this software for any purpose, with proper attribution.