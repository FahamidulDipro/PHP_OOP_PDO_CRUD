<?php
   $db = new PDO('mysql:host=localhost;dbname=new_pdo;','root',''); 
   $stmt = $db->query("SELECT * FROM users");
?>