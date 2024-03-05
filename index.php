<!-- All Rights Reserved By https://github.com/AminaAsif9  -->
<!-- Developed and Designed By https://github.com/AminaAsif9  -->
<?php
  include("db_con.php");
  if(!isset($_SESSION['username']) OR $_SESSION['username'] == ''){
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <body class="bg-light">
        <div class="container">
            <div class="row">
                <div class="text-center my-5">
                <h1>WELCOME</h1>
                <p><?= $_SESSION['username'] ?></p>
                <p><b>Login Email:</b> <?= $_SESSION['email'] ?></p>
                <a href="logout.php" class="btn btn-primary col-3">Logout</a>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- Developed and Designed By https://github.com/AminaAsif9  -->
