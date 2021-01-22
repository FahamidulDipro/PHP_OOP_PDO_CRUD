<?php
    include "./include/db.php";
    $stmt = $db->query("SELECT * FROM users");
    while($row = $stmt->fetch()){
        echo $row['firstname'];
        echo'<br>';
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP PDO CRUD with Bootstrap</title>
</head>
<body>
    <center><h1>PHP OOP PDO CRUD with Bootstrap</h1></center>
</body>
</html>