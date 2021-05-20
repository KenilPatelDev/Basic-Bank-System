<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'my_bank';

    // Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    // Connect to database
    if(!$conn) {
        die("Could not connect to the server due to the following error --> ".mysqli_connect_error());
    }
    
?> 