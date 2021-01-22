<?php
    include "./include/db.php";
    // $query = $db->query("INSERT INTO `users`( `firstname`, `lastname`) VALUES ('Raihan','Nasim')");
    // $query = $db->query("UPDATE `users` SET `lastname`='Dipro' WHERE id=1");
    $query = $db->query("DELETE FROM `users` WHERE id=6");
    if($query){
        // echo"Record Inserted Successfully!";
        // echo"Record Updated Successfully!";
        echo"Record Deleted Successfully!";
    }
    else{
        // echo"Something was wrong, record cannot be inserted.";
        // echo"Something was wrong, record cannot be Updated.";
        echo"Something was wrong, record cannot be Deleted.";
    }
?>