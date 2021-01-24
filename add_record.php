<?php
include "./include/header.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>PHP PDO OOP CRUD </title>
</head>

<body>
<div class="clearfix"></div><br>
    <div class="container mt-3">
        <form action="POST">
            <table class="table table-bordered">
            <tr>
                <td>Firstname</td>
                <td><input type="text" class="form-control" required></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><input type="text" class="form-control required" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" class="form-control required" required></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" class="form-control required" required></td>
            </tr>
            </table>
            <tr>
            <td><button class="btn btn-success text-light"><i class="fas fa-plus text-light mx-3"></i>Insert Record</button></td>
            <td><a href="index.php" class="btn btn-secondary text-light"><i class="fas fa-backward mx-2"></i>Back</a></td>
            </tr>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>