<?php
$db_name = "mysql:host=localhost;dbname=testing";
$username = "Revenant";
$password = "Sanskar055";

// connecting to database for PDO (PHP Data Object)
$conn = new PDO($db_name, $username, $password);
// bind param
$firstname = "Saniya";
$lastname = "Beniwal";
$age = "20";
$class = "12B";

$sql = $conn->prepare("INSERT INTO students (firstname, lastname, age, class) VALUES (?, ?, ?, ?)");
$sql->bindparam(1, $firstname, PDO::PARAM_STR);
$sql->bindparam(2, $lastname, PDO::PARAM_STR);
$sql->bindparam(3, $age, PDO::PARAM_INT);
$sql->bindparam(4, $class, PDO::PARAM_STR_CHAR);
$sql->execute();
?>