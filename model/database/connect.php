<?php

function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'khms';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}

// function OpenCon()
// {
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "khms";
//     $port = 3306;

//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname, $port);

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
//     echo "Connected successfully";

//     return $conn;
// }

// function CloseCon($conn){
//     $conn -> close();
//     echo "Disconnected successfully";
// }
