<?php
$db_name = "mysql:host=localhost;dbname=testing";
$username = "Revenant";
$password = "Sanskar055";

//establishing connection
$conn = new PDO($db_name, $username, $password);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = $conn->prepare("SELECT firstname, age FROM students");
$sql->execute();
//here we use bind column method
/*$sql->bindColumn('firstname', $fname);
$sql->bindColumn('age', $umar); */

// anothe method to bind column
$sql->bindColumn(1, $fname);
$sql->bindColumn(2, $umar);

while($row = $sql->fetch()){
    echo "{$fname} - {$umar}<br>";
}
?>