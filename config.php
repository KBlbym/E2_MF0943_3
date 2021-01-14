<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsletter";
    try {
            $context = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
            $context->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();

    }
?>