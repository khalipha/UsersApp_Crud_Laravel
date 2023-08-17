# CRUD User Application in Laravel 5.5
## Overview

Includes CRUD, migration, seeding, factory, phpunit

## Task 1

### Requirements
PHP 7.0 or higher

MySQL Database

Composer

### Setup

-	Clone project
-	Create database called participants on MySql
-   Navigate to source code folder, eg:c:\xampp\htdocs\laravel5\task1\UserRegistry
-	run composer update command on terminal , command: composer update
-   Create .env file
-	on .env file your database connection should look like this:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=participants
    DB_USERNAME=root
    DB_PASSWORD=

-	run command: php artisan migrate
-	run command: php artisan db:seed
-	run command: php artisan serve

Route: http://127.0.0.1:8000/users

### Brief
Complete the user listing interface as per the design. The design files is inside the task1/UserRegistryDesign folder

1. The Laravel 5.5 User App consists of the following features :
  
    a. Lists all users currently stored in the database
 
    b. Ability to add new users
  
    c. Ability to delete existing users
    
2. Contains routes for each of the above features
3. Implements a respository design pattern with models when interfacing with the database
4. Tests created in PHPunit.
