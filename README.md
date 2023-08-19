<p align="center">SIMPLE PROJECT</p>



## REQUIRMENTS

1-DB  
Create a simple MySQL DB that has only one table for users that will store First Name,Last Name and user image Path, the app will use this table for soft-delete only. 
 

2-Front End 
create a form that will have :   
- three required input fields for first name, last name and user image upload. 

- The page has to be responsive with three columns for each field on desktop and one column on mobile devices with the three fields on top of each other. 

- The Form have to use CSRF token security  
 
- use JS to make sure it’s a valid image before upload and then display thumbnail for the uploaded image 
 

3-Back End 
Handle form submit and save to DB and make sure that the uploaded file is an image and is not larger than 2MB.

## DATABASE

If you don't want to use the laravel migrations, launch *mysql* and run the following commands in order:
- CREATE DATABASE simple_project;

- CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  image_path VARCHAR(255) NOT NULL,
  deleted_at DATETIME NULL
);

## Normal Setup
After clone this project, follow these steps:
- composer install
- php artisan generate:key
- if you don't create the database by mysql directly,  then run this command:
  php artisan migrate
- php artisan serve
- eneter localhost:8000


