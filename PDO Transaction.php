<?php
try{
    $db_name = "mysql:host=localhost;dbname=testing";
    $username = "Revenant";
    $password = "Sanskar055";

    $con = new PDO($db_name, $username, $password);
    // here we need to begin transaction to turn off the auto-commit
    $con->beginTransaction();

    $sql1 = $con->prepare("INSERT INTO students (firstname, lastname, age, class) VALUES (?, ?, ?, ?)");
    $sql2 = $con->prepare("UPDATE city SET cstudent = cstudent + 1 WHERE cname = ?");

    if(!$sql1->execute(["Isha", "Kaur", "18", "12B"])){
        throw new Exception('SQL 1 Failed');
    }
    if(!$sql2->execute(["Chennai"])){
        throw new Exception('SQL 2 Failed');
    }
    $con->commit();

}catch(PDOException $e){
    $con->rollBack();
    echo $e->getMessage();
}
?>