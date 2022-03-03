<?php
$db_name = "mysql:host=localhost;dbname=testing";
$username = "Revenant";
$password = "Sanskar055";

// connecting to database for PDO (PHP Data Object)

$conn = new PDO($db_name, $username, $password);

$sql = $conn->query("SELECT * FROM students");
// for fetcting all data to make less load on server
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result) > 0){
    foreach($result as $row){
        echo "{$row['id']}. {$row['firstname']} - {$row['lastname']} - {$row['age']} - {$row['class']} <br>";
    }
}else{
    echo "No data found!";
}

/* FETCHING ASSOCIATIVE ARRAY
while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    echo "{$row['id']}. {$row['firstname']} - {$row['lastname']} - {$row['age']} - {$row['class']} <br>";
} */

/*while($row = $sql->fetch(PDO::FETCH_NUM)){
    echo "{$row[0]}. {$row[1]} - {$row[2]} - {$row[3]} - {$row[4]} <br>";
   echo "<pre>";
   print_r($row);
   echo "</pre>";
} */

/*while($row = $sql->fetch(PDO::FETCH_OBJ)){
    echo "{$row->id}. {$row->firstname}, {$row->lastname}, {$row->age}, {$row->class}  <br>";
   echo "<pre>";
   print_r($row);
   echo "</pre>"; 
} */
?>