<?php
    $db_name = "mysql:host=localhost;dbname=testing";
    $username = "Revenant";
    $password = "Sanskar055";
    // connecting to the mentioned database
    $con = new PDO($db_name, $username, $password);
    $sql = $con->prepare("INSERT INTO students (firstname, lastname, age , class) VALUES (?, ?, ?, ?)");
    $sql->execute(["sia", "verma", "20", "12A"]);
    echo $con->lastInsertId();



  /*  $sql = "UPDATE students SET class = '12E' WHERE class = '12C'";
    $results = $con->exec($sql);
    echo $results; */
    /*$sql = $con->prepare("SELECT * FROM students");
    $sql->execute(); */

   // echo $sql->rowCount();


   /* $results = $sql->fetchAll(PDO::FETCH_COLUMN, 2);
    echo "<pre>";
    print_r($results);
    echo "</pre>"; */

   /* $sql = $con->prepare("SELECT class, firstname, age FROM students");
    $sql->execute();

    $results = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($results);
    echo "</pre>"; */

   /* $results = $sql->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($results);
    echo "</pre>"; */

   /* $sql = $con->prepare("SELECT firstname, class  FROM students");
    $sql->execute();

    $results = $sql->fetchAll(PDO::FETCH_KEY_PAIR);
    echo "<pre>";
    print_r($results);
    echo "</pre>"; */

   /* $results = $sql->fetchAll(PDO::FETCH_CLASS);
    echo "<pre>";
    print_r($results);
    echo "</pre>"; */

 

?>