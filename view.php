<?php
include 'connection.php';



$name=$_POST["listitem"];

$sql = "INSERT INTO list (listitem) VALUES ('$name')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

header("refresh:2; url=index.html");

$mysqli->close();
?>


