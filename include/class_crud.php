<?php
    class Crud{
        private $db;
        public function __construct($db_con)
        {
            $this->db = $db_con;
        }

        public function dataView($q){
            $stmt = $this->db->prepare($q);
            $stmt->execute();
            if($stmt->rowCount()>0){
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo'<tr class="container text-center">
                    <td>'.$row['id'].'</td>
                    <td>'.$row['firstname'].'</td>
                    <td>'.$row['lastname'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['contact'].'</td>
                    </tr>';
                }
            }
        }
    }
  
?>