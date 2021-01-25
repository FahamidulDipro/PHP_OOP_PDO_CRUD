<?php
include "./include/header.php";
include "./include/db-config.php";
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
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $edit = $crud->getId($id);
    }
    ?>
    <?php
    if (isset($_POST['update'])) {
        $first = $_GET['id'];
        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        if ($crud->update($id, $first, $last, $email, $contact)) {
            $msg = '<div class="alert alert-info"><strong>Record successfully updated!</strong><a href="index.php"  class="mx-3">Home</a></div>';
            // header("location:index.php?insert");
        } else {

            $msg = '<div class="alert alert-danger"><strong>Failed to update record</strong><a href="index.php" class="mx-3">Home</a></div>';
        }
    }
    ?>

    <div class="container mt-3">
        <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
        <form method="POST">
            <table class="table table-bordered">
                <tr>
                    <td>Firstname</td>
                    <td><input type="text" name="firstname" value='<?php echo $edit['firstname'] ?>' class="form-control" required></td>
                </tr>
                <tr>
                    <td>Lastname</td>
                    <td><input type="text" name="lastname" value='<?php echo $edit['lastname'] ?>' class="form-control required" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value='<?php echo $edit['email'] ?>' class="form-control required" required></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact" value='<?php echo $edit['contact'] ?>' class="form-control required" required></td>
                </tr>
            </table>
            <tr>
                <td><button class="btn btn-primary text-light" name="update">Update Record</button></td>
                <td><a href="index.php" class="btn btn-danger text-light">Cancel</a></td>
            </tr>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>