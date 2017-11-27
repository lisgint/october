<?php 
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "indian-db");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "The website encountered an unexpected error. Please try again later.\n";
        echo "Error: " . $mysqli->connect_error . "\n";
        exit;
    }
    
    if(isset($_POST['submit'])){
        mysqli_query($mysqli,"INSERT INTO orders (name, email, phone, message)
        VALUES('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[message]')");  
    }

?>



