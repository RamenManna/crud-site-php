<?php
include 'conn.php';
if (isset($_POST['done'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "INSERT INTO `crud`( `username`, `password`) VALUES ('$username','$password')";
    $query = mysqli_query($con, $q);
    header('location:display.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataBase Practical</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-dark">

    <div class="col-lg-6 m-auto">
        <form class="mt-3" method="POST">
            <div class="card">
                <div class="card-header bg-info">
                    <h1 class="text-white text-center">Insert Data into Table</h1>

                </div><br>
                <label>Username:</label>
                <input type="text" name="username" class="form-control"><br>
                <label>Password:</label>
                <input type="password" name="password" class="form-control"><br>
                <button class="btn btn-success" type="submit" name="done">Submit</button>
            </div>

        </form>

    </div>

</body>

</html>