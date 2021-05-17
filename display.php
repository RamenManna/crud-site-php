<?php
include 'conn.php';


$q = "select *from crud";
$query = mysqli_query($con, $q);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    #id{
        display: inline-block;
        width: 350px;
    }
    #btn{
        display: inline-block;
    }
    </style>
</head>

<body class="bg-dark">
    <div class="container bg-light mt-5">
        <div class="col-lg-12 ">
            <h1 id="id" class="text-info text-center">User Lists</h1>
            <a href="index.php">
            <button id="btn" class="btn btn-warning text-white">Insert</button></a>
            <table class="table table-striped table-hover table-bordered mt-3">
                <tr class="text-center">
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>

                </tr>
                <?php
                include 'conn.php';


                $q = "select *from crud";
                $query = mysqli_query($con, $q);
                while ($res = mysqli_fetch_array($query)) {
                    $userId=$res['username'];
                    $pass=$res['password'];

                ?>
                    <tr class="text-center">
                        <td><?php echo $userId ?></td>
                        <td><?php echo $pass?></td>
                        <td><button class="btn btn-danger">
                        <a class="text-white" href="delete.php?id=<?php echo $userId ?>"> Delete</a>
                        </button>
                       </td>
                        <td><button class="btn btn-primary">
                        <a class="text-white" href="update.php?id=<?php echo $userId ?>">
                        Update</a></button></td>
                    </tr>
                <?php
                }
                ?>
            </table>

        </div>
    </div>


</body>

</html>