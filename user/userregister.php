<?php
include("includes/connection.php");

?>





<html>
    <title>login page</title>
    <link rel="stylesheet" href="/admin/styles/style.css">
<link rel="stylesheet" href="/admin/styles/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <body>
 <section  class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
      

        <div class="card bg-dark text-white col-md-7 col-lg-5 col-xl-5 offset-xl-1 " style="border-radius: 1rem;">
          <div class="card-body p-6 text-center">

            <div class="mb-md-4 mt-md-3 pb-2">

              <h2 class="fw-bold mb-1 text-uppercase">Register</h2>
              <p class="text-white-40 mb-3">Please enter your Email and Password!</p>
<form action="login.php" method="post">
              <div class="form-outline form-white mb-2">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email"/>
                <label class="form-label text-left" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-3">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <div class="form-outline form-white mb-3">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="passwordc" />
                <label class="form-label" for="typePasswordX">Confrom Password</label>
              </div>
                <hr>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
            </div>
            </div>
          </form>


          <?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpassword = $_POST['passwordc'];

    $res = mysqli_query($db,"INSERT into registration values ('', '$name', '$password', '$conpassword')");
    if($res)
    {
        echo "Success";
    }
    else {
        echo "failed";
    }
}
?>
          </div>
        </div>
      </div>
    </div>

      </div>
    </div>
  </section>

</body> 
  </html>