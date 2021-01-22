<?php
    include "./include/db.php";
    class Users{
        public $firstname;
        public $lastname;
        public $fullname;
    }
    $stmt = $db->query("SELECT * FROM users LIMIT 0");
    $row = $stmt->fetchAll();
    
        if(count($row)){
            foreach($row as $r){
                echo $r['firstname'];
                echo"<br>";
            }
        }
        else{
            echo"No records found";
        }

  
        echo'<br>';
           
?>
