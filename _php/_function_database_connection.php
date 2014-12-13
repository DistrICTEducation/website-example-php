<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'comics';
$mysqli;

/**
 * Close the database connection.
 */
function close_database_connection() {
    global $mysqli;
    $mysqli->close();
}

/**
 * Open the database connection.
 */
function open_database_connection() {
    global $mysqli, $dbhost, $dbname, $dbpass, $dbuser;
    
    // Create connection
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } else {
        echo "Connected successfully";
    }
}
