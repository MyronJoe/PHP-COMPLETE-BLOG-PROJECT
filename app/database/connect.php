<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog';


$conn = new MySQLi($host, $user, $pass, $db_name);

// checks if the connection was successfull

// if ($conn->connect_error) {
//     die('Database connection error: '. $conn->connect_error);
// }
// else{
//     echo 'No Error detected';
// }

?>