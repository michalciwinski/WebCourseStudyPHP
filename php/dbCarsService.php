<?php
include '../otherSites/Car.php';
function connectToDatabase() {
    $servername = "localhost";
    $username = "user";
    $password = "password";
    $dbname = "websitephp";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function fetchCarsFromDatabase($conn) {
    $sql = "SELECT * FROM cars";
    $result = $conn->query($sql);
    $cars = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cars[] = new Car($row['ID'], $row['Name'], $row['Text'], $row['TopSpeed'], $row['EngCapacity'], $row['EngPower'], $row['TranType'], $row['TranAmount'], $row['PictureLink'], $row['Price']);
        }
    }
    return $cars;
}

function closeDatabaseConnection($conn) {
    $conn->close();
}
?>
