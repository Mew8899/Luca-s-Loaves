<?php
function dbConnect()
{
    // Database credentials
    $host = "localhost";
    $username = "root";     // default for XAMPP
    $password = "";         // default for XAMPP (EMPTY)
    $database = "lucas_loaves";  // your database name — change if different

    // Create connection
    $dbc = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$dbc) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    return $dbc;
}
?>
