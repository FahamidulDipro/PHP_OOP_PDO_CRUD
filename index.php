<?php
    include "./include/db.php";
    class Users{

    }
    $stmt = $db->query("SELECT * FROM users");
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        echo $row->firstname;
        echo'<br>';
    }
   
    // define("Numeric","Hellow! I am Numeric array constant");
    // echo Numeric;
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP PDO CRUD with Bootstrap</title>
</head>
<body>
    <center><h1>PHP OOP PDO CRUD with Bootstrap</h1></center>
</body>
</html> -->