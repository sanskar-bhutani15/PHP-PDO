<?php
$db_name = "mysql:host=localhost;dbname=testing";
$username = "Revenant";
$password = "Sanskar055";

// connecting to database for PDO (PHP Data Object)
$conn = new PDO($db_name, $username, $password);
// bind param
$age = "19";
$sql = $conn->prepare("SELECT * FROM students WHERE age = :umar");
//$sql->bindparam(':umar', $age, PDO::PARAM_INT);
$sql->execute(array(':umar' => $age));


/*$sql = $conn->prepare("SELECT * FROM students WHERE age = ?");
$sql->bindparam(1, $age, PDO::PARAM_INT);
$sql->execute(array($age)); */

/*$sql = $conn->prepare("SELECT * FROM students");
$sql->execute(); */

// for fetcting all data to make less load on server
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result) > 0){
    foreach($result as $row){
        echo "{$row['id']}. {$row['firstname']} - {$row['lastname']} - {$row['age']} - {$row['class']} <br>";
    }
}else{
    echo "No data found!";
}
?>