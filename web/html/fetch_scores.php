<?php


$servername = "localhost";
$username = "gschroeder7";
$password = "000552790";
$dbname = "bowling_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT player_name, score FROM scores ORDER BY score DESC";
$result = $conn->query($sql);

$scores = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $scores[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
