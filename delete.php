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
    <!-- Deleting Action -->

    <?php
    include "./include/header.php";
    include "./include/db-config.php";
    ?>
    <?php
    if (isset($_POST['del'])) {
        $id = $_GET['id'];
        $crud->delete($id);
        header("location:delete.php?deleted");
    }

    ?>
    <div class="container">
        <?php
        if (isset($_GET['deleted'])) {
            echo'<div class="alert alert-success mt-3"><strong>Deleted Successfully!</strong></div>
            <a href="index.php" class="btn btn-primary"><i class="fas fa-backward mx-2"></i>Back to homepage</a>';
        }
        else{
            echo'<div class="alert alert-warning mt-3"><strong>Are you sure you want to delete this record?</strong></div>';
        }
        ?>


    </div>



    <div class="container">

        <?php
        if (isset($_GET['id'])) {


        ?>
            <table class="table table-bordered mt-3 text-center">
                <tr>
                    <th>Serial No.</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                </tr>
                <?php
                $stmt = $db->prepare("SELECT * FROM users WHERE `id`=:id");
                $stmt->execute(array(":id" => $_GET['id']));
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>
               <td>' . $row['id'] . '</td>
               <td>' . $row['firstname'] . '</td>
               <td>' . $row['lastname'] . '</td>
               <td>' . $row['email'] . '</td>
               <td>' . $row['contact'] . '</td>
               </tr>';
                }
                ?>
            </table>

        <?php
        }
        ?>
        <div class="container">
            <?php
            if (isset($_GET['id'])) {


            ?>
                <form method="POST">
                    <button class="btn btn-danger" type="submit" name="del"><i class="fas fa-trash mx-2 "></i>Confirm Delete</button>
                    <a href="index.php" class="btn btn-secondary"><i class="fas fa-backward mx-2"></i>No</a>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>