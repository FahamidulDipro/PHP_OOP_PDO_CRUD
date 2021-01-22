<?php
    include "./include/db.php";
    class Users{
        public $firstname;
        public $lastname;
        public $fullname;

        function __construct()
        {
            $this->fullname=$this->firstname.' '.$this->lastname;

        }
        public function xyz(){
            echo"Demo xyz";
        }
    }
    $stmt = $db->query("SELECT * FROM users");
    $stmt->setFetchMode(PDO::FETCH_CLASS,"Users");
    while($row = $stmt->fetch()){
      
        echo $row->fullname;
        // echo 'Firstname is :'.$row->firstname.' and lastname is: '.$row->lastname;
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