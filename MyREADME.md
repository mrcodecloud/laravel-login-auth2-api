# Pre-requisite 
- XAMPP, Composer, and NodeJS must be installed 


# Commands used while project configuration 
- composer create-project laravel/laravel project-name
- Navigate to the project through terminal and run following command
- php artisan serve [ Starting the laravel projct to make it accessible from browser] (keep ther terminal window open)
- Open a new terminal tab and navigate to the project for following commands,
- composer require laravel/ui (Adding UI Components)
- php artisan ui vue --auth ( It will create, complete authentication for our project)
- npm install ( Install the required node packages )
- npm run dev ( Finish Authentication UI )
- php artisan migrate ( Migrate the required db tables to the database)

# Adding Laravel Passport for OAuth authentication 
- Navigate to the project repository through terminal 
- Run command "composer require laravel/passport"
- Run Command "php artisan migrate" to migrate the new authentication tables 
- Run Command "php artisan passport:install" for passport installation 
- Add HasApiTokens to the app/model/user model
- Initialize laravel passport roots in the app/providers/AuthServiceProvider.php file
- GoTo config/auth.php and define authentication for api routes 
    - Define passport as driver for API instead of token 
- Defining Routes for API in the routes/api.php 
    - Delete everything except the comments, and the use / includes 
    - Before defining a route we need to define a controller using the command "php artisan make:controller /Api/AuthController"
    - Above command will result in a folder /app/Http/Controllers/Api/AuthController.php where we will write our functions 
    for the authentication 
    - We will make changes in the api.php, and the AuthController.php for routes, and functions 
- Now all the other routes will be authenticated using OAuth, and Middleware will be used for it. 

