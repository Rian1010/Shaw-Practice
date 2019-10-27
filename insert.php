<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "commerce";

    # Create and Check connection
    $conn = new mysqli ($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    $sql = "INSERT INTO products (name,price,description)
    VALUES ('$name', '$price', '$description')";

    #$conn->query($sql) === TRUE) means send the sql string to the database
    if($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>