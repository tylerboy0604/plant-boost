<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "energy";


$conn = new mysqli($servername, $username, $password, $db);







if ($conn ->connect_error) {
    die("connection failed: " . $conn -> connect_error);
}

$sql = "SELECT * FROM reacties";

if($result = $conn-> query($sql)) {
    while($row = $result-> fetch_row()) {
        echo $row[0]. " ". $row[1]." ". $row[2]. " ". $row[3]. ' ' . $row[4] . "<br>";

    }
    $result->close();

}

$conn -> close();





?>