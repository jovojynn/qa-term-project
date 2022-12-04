<?php 
    // These constants define the location of where our root directory is located.
    define('WWW_ROOT', 'http://localhost');
    define('PROJECT_ROOT', dirname(__DIR__, 1));

    // These are Database constants that are related to the columns in our table on MySQL. 
    // It defines the server it is located on, the username, the password, and the database name itself.
    define('DB_HOST',  'localhost');
    define('DB_USER',  'root');
    define('DB_PASS',  'root');
    define('DB_NAME',  'wanderlust');    

    // This makes it so that in order to run this init.php file it requires the functions.php file otherwise it would cause a fatal error if the functions.php file did not exist.
    require('functions.php');

    // Requires the Location class to run this file.
    require(get_path('init/Classes/Location.php'));

    // Requires the Review Class to run  this file.
    require( get_path('init/Classes/Review.php'));


    // This line uses our user defined function called 'connect_db' located in functions.php.
    // It runs the function that connects us to our database upon initialization.
    $db = connect_db();

    // This uses :: which is a scope resolution operator so that we can access things like constants, methods, and properties at a class level.
    
    // In this case we are accessing the method called db_set inside of the class Task and User.
    Location::db_set($db);
    Review::db_set($db);