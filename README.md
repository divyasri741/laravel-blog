##Laravel Blog-system
 This is a simple Laravel-based blogging platform developed as part of an intern task. It includes user authentication, admin approval, and basic dashboard features.

 ##Setup Instructions
 Follow the steps below to set up and run the Laravel Blog system:
 A. Create a new Laravel project
    composer create-project laravel/laravel blog-system 
 B. Set up database connection
    Open the .env file in your project root and update the database info:
 C. Install Laravel Breeze for Authentication scaffolding
    composer require laravel/breeze --dev
    php artisan breeze:install
    npm install
    npm run dev
 D. Run migrations to create tables in DB
 Laravel comes with migration files to create the users table and others needed.
    php artisan migrate-This will create the users table in your database with fields like id, name, email, password, timestamps, etc.
 E. Start the Laravel development server
    php artisan serve

##Key Features Implemented
 A.User Registration:
  1.Users can sign up with name, email, and password.
  2.Registration page is styled using Laravel Breeze
 B.Secure Login System:
  1.Only users with correct credentials can log in.
  2.Passwords are securely hashed.
 C.Admin Approval System:
  1.A new field is_approved is added to the users table.
  2.Newly registered users cannot log in until an admin sets is_approved = 1.
  3.If not approved, the user sees a message:
    “Your account is not approved yet. Please contact the administrator.”

##Challenges faced
 A.npm install was showing many errors in CMD
  1.I solved it by running npm install in PowerShell.
  2.Also, every time before installing, I had to clear the npm cache using:
    npm cache clean --force
 B.Laravel was not connected to the default database
  1.changed the .env file to match our custom database.
  2.This took time to figure out
 C.Admin approval feature was not working at first
  1.I forgot to create the is_approved column.
  2.Later, added a migration and updated the login controller.
 D.Sometimes faced blade file path or route issues
  1.solved by checking file locations and correcting names.
 











