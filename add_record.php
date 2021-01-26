<?php
include "./include/header.php";
include "./include/db-config.php";

if (isset($_POST['submit'])) {
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    if ($crud->create($first, $last, $email, $contact)) {

        header("location:add_record.php?insert");
    } else {
        header("location:add_record.php?fail");
    }
}
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
    <?php
    if (isset($_GET['insert'])) {
        echo '<div class="container mt-3"><div class="alert alert-success"><strong>Your Record has been inserted successfully!</strong></div></div>';
        header("location:index.php");
    }
    if (isset($_GET['fail'])) {
        echo '<div class="container mt-3"><div class="alert alert-danger"><strong>Failed to insert</strong></div></div>';
    }
    ?>
    <div class="clearfix"></div><br>
    <div class="container mt-3">
        <form method="POST">
            <table class="table table-bordered">
                <tr>
                    <td>Firstname</td>
                    <td><input type="text" name="firstname" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Lastname</td>
                    <td><input type="text" name="lastname" class="form-control required" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control required" required></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact" class="form-control required" required></td>
                </tr>
            </table>
            <tr>
                <td><button class="btn btn-success text-light" name="submit"><i class="fas fa-plus text-light mx-3"></i>Insert Record</button></td>
                <td><a href="index.php" class="btn btn-secondary text-light"><i class="fas fa-backward mx-2"></i>Back</a></td>
            </tr>
        </form>
    </div>
    <?php
        include "./include/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>