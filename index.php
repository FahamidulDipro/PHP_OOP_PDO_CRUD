<?php
    include "./include/db.php";
    class Users{
        public $firstname;
        public $lastname;
        public $fullname;

        private $records=array();
        
        public function __set($name, $value)
        {
            $this->records[$name]=$value;
        }

        public function __get($name)
        {
        if(array_key_exists($name,$this->records)){
            return  $this->records[$name];
        }
            
        }
        function toArray(){
            return  $this->records;
        }

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
        print_r($row->toArray());
        echo $row->fullname;

        // echo 'Firstname is :'.$row->firstname.' and lastname is: '.$row->lastname;
        echo'<br>';
           
 
    }
   
    // define("Numeric","Hellow! I am Numeric array constant");
    // echo Numeric;
?>
