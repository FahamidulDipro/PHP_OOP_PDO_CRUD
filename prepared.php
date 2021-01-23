<?php
    include "./include/db.php";
    $stmt=$db->prepare("INSERT INTO `users` (`firstname`,`lastname`) VALUES (?,?)");
    $stmt->execute([
        'Rakib',
        'Hasan'
    ]);
?>