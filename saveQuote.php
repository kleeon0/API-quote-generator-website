<?php
    session_start();

    // Connect to MySQL
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "quotes";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && ($_POST['Quote']!="") && ($_POST['Author']!="")){
        $time = date('Y-m-d H:i:s');
        $quote = $_POST['Quote'];
        $author = $_POST['Author'];
        $sql = "INSERT INTO saved (dateTime, quote, author)
    VALUES ('$time', '$quote', '$author')";
        if ($conn->query($sql) === TRUE) {
            header("Location: saved.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    else{
        echo "There is no quote to be saved";
    }



?>