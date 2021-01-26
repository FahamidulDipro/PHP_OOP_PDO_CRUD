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
                    <td><a href="edit.php?id='.$row['id'].'" class="text-dark"><i class="fas fa-edit"></i></a></td>
                    <td><a href="delete.php?id='.$row['id'].'" class="text-dark"><i class="fas fa-trash"></i></a></td>
                    </tr>';
                }
            }
        }
        public function getId($id){
           $stmt= $this->db->prepare("SELECT * FROM users WHERE `id`=:id ");
           $stmt->execute(array(":id"=> $id));
            $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
            return $editRow;
        }
        public function update($id,$f,$l,$e,$c){
            try{
                $stmt = $this->db->prepare("UPDATE `users` SET `firstname`=:f,`lastname`=:l,`email`=:e,`contact`=:c WHERE `id`=:id");
                // $stmt->bind_param("sss",$f,$l,$e,$c);
                $stmt->bindParam(":f",$f);
                $stmt->bindParam(":l",$l);
                $stmt->bindParam(":e",$e);
                $stmt->bindParam(":c",$c);
                $stmt->bindParam(":id",$id);
                $stmt->execute();
                return true;
            }catch(Exception $ex){
                echo $ex->getMessage();
                return false;
            }
          
        }
        // Pagingation
        public function paging($q,$r){
            $starting_position = 0;
            if(isset($_GET['page_no'])){
                $starting_position = ($_GET['page_no']-1)*$r;
                
            }
            $q2 = $q." LIMIT $starting_position,$r";
            return $q2;
        }
        public function pagelink($q,$r){
            $self = $_SERVER['PHP_SELF'];
            $stmt=$this->db->prepare($q);
            $stmt->execute();
            $totalNumberOfRecords = $stmt->rowCount();
            if($totalNumberOfRecords>0){
                echo'
                <ul class="pagination">';
                $totalPage = ceil($totalNumberOfRecords/$r);
                $current_page = 1;
                if(isset($_GET['page_no'])){
                    $current_page = $_GET['page_no'];
                    if($current_page!=1){
                        $prev = $current_page-1;
                        echo'<a  class="page-link"  href="'.$self.'?page_no=1" class="text-dark">First</a>';
                        echo'<a  class="page-link"  href="'.$self.'?page_no='.$prev.'" class="text-dark">Previous</a>';
                        
                    }
                    if($current_page==1){
                        $next = $current_page+1;
                      
                        echo'<a  class="page-link"  href="'.$self.'?page_no='.$next.'" class="text-dark">Next</a>';
                        echo'<a  class="page-link"  href="'.$self.'?page_no='.$totalPage.'" class="text-dark">Last</a>';
                        
                    }
                    
                }
        
                for($i=1;$i<=$totalPage;$i++){
                       
                        if($i==$current_page){
                        echo'<a  class="page-link"  href="'.$self.'?page_no='.$i.'" style="color:red;">'.$i.'</a>';
                        }
                        else{
                            echo'<a  class="page-link"  href="'.$self.'?page_no='.$i.'" class="text-primary">'.$i.'</a>';
                        }

                    
                    }
                    echo'</ul>
                    ';
                
            }
       
        }

        
    }
  
?>