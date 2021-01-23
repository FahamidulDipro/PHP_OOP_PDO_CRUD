<?php
    include "./include/db.php";
    $stmt = $db->query("SELECT * FROM users");
    if($stmt->rowCount()){
        echo 'Total Rows: '.$stmt->rowCount();
    }
    else{
        echo'No Data Found';
    }
    // $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo count($row);
    // echo'<pre>';
    // print_r($row);
?>

<?php
    //  include "./include/db.php";
    //  $stmt = $db->query("SELECT count(*) FROM users");
    //  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     // echo'<pre>';
    //     // print_r($row);
    //     foreach($row as $i){
    //         echo 'Total Rows: '.$i;
    //     }
    //  }
 
?>