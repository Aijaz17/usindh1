
<?php

include "../dbconn.php";

session_start();


if(isset($_SESSION['uid']))
{
    header('location:Admin/app.php');

}




if(isset($_POST['login']))
{

    $username=$_POST['uname'];
    $password=$_POST['pass'];

  
    $select="SELECT * FROM `admin` WHERE `username`='$username' || `password`='$password'";

    $run=mysqli_query($conn ,$select);

    $rows=mysqli_num_rows($run);
  
    if($rows<=0)
    {
        ?>
  
               <script> 
  
                          alert("Username or password are wrong");
                          window.open('signin.php' ,'_self');
  
                </script>  
  
        <?php
    }
    
    else
  
     {
  
        $data=mysqli_fetch_array($run);
  
        $id=$data['id'];
  echo $id;
        header('location:app.php');
  
        
  
     }
     
}
      

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@400&display=swap" rel="stylesheet">
  <style>
    * {

      font-family: 'DM Sans', sans-serif;
      font-family: 'Poppins', sans-serif;
    }

    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }

    .h-custom {
      height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
      .h-custom {
        height: 100%;

      }

    }
  </style>

</head>

<body>


  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="/image/reg.png" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="" method="post">


            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Email address</label>
              <input type="text" id="form3Example3" name="uname" class="form-control shadow-none form-control-md" />
            </div>

            <!-- Password input -->
            <label class="form-label" for="form3Example4">Password</label>
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" name="pass" class="form-control shadow-none form-control-md" />
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label shadow-none " for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <input type="submit" name="login" value="login" class="btn btn-primary btn-md"
                style="padding-left: 1.5rem; padding-right: 1.5rem;">
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                  class="link-danger">Register</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
    <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white text-center mb-2 mb-md-0">
        Copyright © 2020. All rights reserved.
      </div>

      <!-- Copyright -->
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>