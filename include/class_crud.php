<?php
    class Crud{
        private $db;
        public function __construct(PDO $db_con)
        {
            $this->db = $db_con;
        }
        public function delete($id){
            $stmt= $this->db->prepare("DELETE FROM users WHERE `id`=:id");
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            return true;
        }
        public function create($f,$l,$e,$c){
            try{
                $stmt = $this->db->prepare("INSERT INTO users (`firstname`,`lastname`,`email`, `contact`) VALUES (:f,:l,:e,:c)");
                // $stmt->bind_param("sss",$f,$l,$e,$c);
                $stmt->bindParam(":f",$f);
                $stmt->bindParam(":l",$l);
                $stmt->bindParam(":e",$e);
                $stmt->bindParam(":c",$c);
                $stmt->execute();
                return true;
            }catch(Exception $ex){
                echo $ex->getMessage();
                return false;
            }
          
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
                    <td><a href="#" class="text-dark"><i class="fas fa-edit"></i></a></td>
                    <td><a href="delete.php?id='.$row['id'].'" class="text-dark"><i class="fas fa-trash"></i></a></td>
                    </tr>';
                }
            }
        }
    }
  
?>