<?php
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_NAME', 'Food_Order_App');
    define('DB_PASSWORD', '');


    $conn = new mysqli(LOCALHOST,DB_USERNAME, DB_PASSWORD) or die(mysqli_error());//database connection
    $db_select = new mysqli($conn,'DB_NAME') or die(mysqli_error());
?>