<?php
try{
    $db_name = "mysql:host=localhost;dbname=testing";
    $username = "Revenant";
    $password = "Sanskar055";
    // making multiple attributes 
    $abte = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

    $con = new PDO($db_name, $username, $password);
    // Setting attributes for execption for makig code easier
    //$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // here we need to begin transaction to turn off the auto-commit
    $con->beginTransaction();

    $sql1 = $con->prepare("INSERT INTO students (firstname, lastname, age, class) VALUES (?, ?, ?, ?)");
    $sql2 = $con->prepare("UPDATE city SET cstudent = cstudent + 1 WHERE cname = ?");

    $sql1->execute(["Aditi", "Sharma", "20", "12A"]);
    $sql2->execute(["Gurugram"]);
    $con->commit();
    echo "Data Inserted and Updated successfully...";
}catch(PDOException $e){
    $con->rollBack();
    echo $e->getMessage();
}
?>