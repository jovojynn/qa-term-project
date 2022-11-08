<?php 

// User Defined Functions

function get_public_url($path = "") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . '/public' . $path;
}

function get_path($path = "") {
    if ($path != "") {
        if($path[0] != '/') {
        $path = '/' . $path;
    }
}
    return PROJECT_ROOT . $path;
}

function redirect($path) {
    header('Location: ' . get_public_url($path) );
}

function h($str) {
    return htmlspecialchars($str);
}

function u($string) {
    return urlencode($string);
}


// Prints out human readable data wrapped in <pre> tags, for debugging
function wrap_pre($data) {
    return '<pre>' . print_r($data,true) . '</pre>';
}

// Prints out human readable data, and prevents the script from continuing
function dd($data) {
    echo wrap_pre($data);
    die();
}

// My Database function that connects us to my database called 'dyw_app' on MySQL.
function connect_db() {
    // These objects are related to the database constants located in init.php
    $host = DB_HOST;
    $username = DB_USER;
    $password = DB_PASS;
    $name = DB_NAME;

    // This defines the $db object under the mysqli class and uses the above objects as parameters.
    $db = new mysqli($host, $username, $password, $name);

    // This statement is meant to test that our connection to the database has been successful or not.
    if($db->connect_errno) {
        echo "Uh oh, connection to MySQL has failed: " . $db -> connect_error;
    }

    // returns the information above into $db.
    return $db;

}
