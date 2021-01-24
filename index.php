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
    <?php
    include "./include/header.php";
    include "./include/db-config.php";
    ?>
    <div class="container">
        <a href="#" class="btn btn-primary mt-3 text-light"> <i class="fas fa-plus text-light mx-3"></i>Add Record</a>
    </div>

    <div class="container mt-3">
        <table class="table table-border table-responsive">
            <tr class="text-center">
            <th>Serial No.</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email ID</th>
            <th>Contact No.</th>
            <th colspan="2">Action</th>
            </tr>
            <?php
                $query = "SELECT * FROM users";
                $crud->dataView($query);
            ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>