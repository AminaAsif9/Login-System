<!-- All Rights Reserved By https://github.com/AminaAsif9  -->
<!-- Developed and Designed By https://github.com/AminaAsif9  -->
<?php
  include("db_con.php");
  $msg ='';

if(isset($_POST['signup']))
{

 $f_name = $_POST['f_name'];
 $l_name = $_POST['l_name'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];

// database insert SQL code
$insert_query = "INSERT INTO all_user
        (f_name, l_name, username, email, password) 
        VALUES
        ('$f_name', '$l_name', '$username', '$email', '$password')";

// insert in database 
$result = mysqli_query($conn, $insert_query);

if($result)
{
  $msg = '<p class="text-success text-center"><strong>Data Inserted Successfully! </strong> You account is created! 
  <a href="login.php" ><b>Login</b></a></p>';

}else{
   $msg = '<p class="text-danger text-center"> <strong>Error: </strong> You data is not inserted!</p>';

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>
  <section class="container">
   <div class="row d-flex justify-content-center">
        <div class="col-lg-7">
        <div class="card mt-5 bg-dark text-light">
  <div class="card-body p-5">
          <h2 class="fw-bold mb-3 text-center">Signup Now</h2>
          <?= $msg; ?>

          <form method="post" action="">
          <div class="row">
            <div class="mb-4 col-6">
              <label>First Name</label>
            <input type="text" name="f_name" class="form-control" placeholder="Enter your First Name" required/>
</div>

<div class="mb-4 col-6">
              <label>Last Name</label>
            <input type="text" name="l_name" class="form-control" placeholder="Enter your Last Name" required/>
</div>
</div>

<div class="mb-4">
              <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter your Username" required/>
</div>

<div class="mb-4">
              <label>Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email" required/>
</div>

            <div class="mb-4">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter your Password" required/>
            </div>

            <div class="text-center">
            <button type="submit" name="signup" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>

            <p>Already have an account?</p>
            <a href="login.php"  class="text-decoration-none">Log in</a>
           </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!-- Developed and Designed By https://github.com/AminaAsif9  -->
