<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_monitoring";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}


if(!empty($_POST['suhudht']) || !empty($_POST['kelembabandht']) || !empty($_POST['sensorBerat']))
{
    $sensorData1 = $_POST['suhudht'];
    $sensorData2 = $_POST['kelembabandht'];
    $sensorData3 = $_POST['sensorBerat'];


    $sql = "INSERT INTO sensors (suhu, kelembaban, berat) VALUES ('".$sensorData1."', '".$sensorData2."', '".$sensorData3."')";


    if ($conn->query($sql) === TRUE) {
        echo "OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
    ?>