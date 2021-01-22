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
