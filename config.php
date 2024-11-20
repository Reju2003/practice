<?php 

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "conn"; 

    // Create a connection 
    $conn = mysqli_connect($servername, $username, $password, $database); 

    // Check if the connection is successful
    if ($conn) { 
        echo "Success"; 
    } else { 
        die("Error: " . mysqli_connect_error());
    }
?>