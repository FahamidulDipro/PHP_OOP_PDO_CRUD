<?php
    include "./include/db.php";
    $name = "Kamran";
    $last = "Hafiz";
    $email = "kamran@hafiz.com";

    $stmt=$db->query("INSERT INTO `t1`( `name`, `last`) VALUES ('Raihan','Nasim')");
    $lastId = $db->lastInsertId();
    $db->query("INSERT INTO `t2`( `email`, `t1_id`) VALUES ('raihan@nasim.com','$lastId')");
?>