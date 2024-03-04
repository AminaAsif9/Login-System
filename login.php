<?php
  include("db_con.php"); 
  $error = '';
  if(isset($_POST['login_btn'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $query = "SELECT count(id) FROM `all_user` WHERE username = '{$username}' and password = '{$password}' ";
    $query = mysqli_query($conn, $query);
    $query_fetch_count = mysqli_fetch_assoc($query);

    $query = "SELECT * FROM `all_user` WHERE username = '{$username}' and password = '{$password}' ";
    $query = mysqli_query($conn, $query);
    $query_fetch = mysqli_fetch_assoc($query);

    if($query_fetch_count['count(id)'] == 1){
      $_SESSION['username'] = $query_fetch['username'];
        $_SESSION['email'] = $query_fetch['email'];

            header("location: index.php");

    }else{
        
        if(@$query_fetch['username'] != $username AND  @$query_fetch['password'] == $password){
            //Incorrect User
            $error = '<div class="alert alert-danger dark alert-dismissible fade show" role="alert">
            <strong>Sorry ! </strong> Your username/email is incorrect.
          <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
        </div>';

      }elseif(@$query_fetch['username'] == $username AND  @$query_fetch['password'] != $password){
            // Incorrect Password
            $error = '<div class="alert alert-danger dark alert-dismissible fade show" role="alert">
            <strong>Sorry ! </strong> Your password is incorrect.
          <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
        </div>';
        }else{

            // Incorrect Username and Password
            $error = '<div class="alert alert-danger dark alert-dismissible fade show" role="alert">
            <strong>Sorry ! </strong> Your username/email and password are incorrect.
          <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
        </div>';
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <section>
    <div class="card container ">
    <!-- <div class="container"> -->
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="fw-bold my-5 ">Login to your Account</h2>
          <?= $error; ?>

          <form method="post" action="">

            <!-- Email input -->
            <div class="mb-4">
              <label>Username</label>
              <input type="text" name="username" class="form-control" placeholder="Enter your Username" required/>
            </div>

            <!-- Password input -->
            <div class="mb-4">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter your Password" required/>
            </div>

            <!-- Submit button -->
            <button type="submit" name="login_btn" class="btn btn-primary mb-4">
              Login
            </button>

            <!-- Register button -->
            <div>
              <p>Don't have an account?</p>
                <a href="signup.php">Signup here</a>
            </div>
          </form>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
