<?php
try{
    $db_name = "mysql:host=localhost;dbname=testing";
    $username = "Revenant";
    $password = "Sanskar055";

    $con = new PDO($db_name, $username, $password);
    // sql query using prepare becuare its safr than query method
    $sql = $con->prepare("SELECT * FROM students");
    $sql->execute();

    $error = $sql->errorInfo();
   // you can write the if($error[1]) code also here 
}catch(PDOException $e){
        echo $e->getMessage();
}
if($error[1]){
    echo $sql->errorCode();
    echo $error[2];
}else{
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
   print_r($results);
   echo "</pre>";
}
    ?>