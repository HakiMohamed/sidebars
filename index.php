<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/imgs/Sans titre.png" type="image/x-icon">
  <link rel="stylesheet" href="./bootstrap-icons-1.11.1/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
  <link href="./css/bootstrap.min.css" rel="stylesheet"><title>Login</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"> <strong>You</strong><strong>Contacts</strong> </a>
        
            
       
        
           
            <div class="d-flex align-items-center py-2">
               
                <button  class="btn btn-primary mx-1"> <a class="nav-link" href="#loginform">Login</a> </button>
                <button  class="btn btn-primary mx-1"> <a class="nav-link" href="#">Register</a> </button>
            </div>
        
    </div>
</nav>



<div class="container mt-5 mb-4">   

<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active mt-5" id="tab-login"  href="./index.php" role="tab"
      aria-controls="pills-login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a  class="nav-link mt-5" id="tab-register"  href="./Register.php" role="tab"
      aria-controls="pills-register" aria-selected="false">Register</a>
  </li>
</ul>
<!-- Pills navs -->

<?php 
require './phpFiles/Connexion.php';
session_start();
if (isset($_POST['Login'])){
$Nom = htmlspecialchars(trim(strtolower( $_POST['Nom'])));
$email= htmlspecialchars(trim(strtolower( $_POST['email'])));
$password= md5(trim(strtolower( $_POST['password'])));  
$query= "SELECT * FROM utilisateur WHERE Email = '$email' AND Pswd = '$password' ";
if(mysqli_num_rows(mysqli_query($con, $query)) > 0){
  $_SESSION['Nom']=$Nom;
  header('./user/view.php');
}else{
  echo '<div class="alert alert-danger mt-5 alert-dismissible fade show" role="alert">
  <strong>Attention!</strong> username ou password incorrect.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
 }
?>


<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form>
      


      <!-- Email input -->
      <div class="form-outline mx-2 mb-4 w-75">
        <input type="email" id="loginName" class="form-control" />
        <label class="form-label" for="loginName">Email or username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mx-2 mb-4 w-75">
        <input type="password" id="loginPassword" class="form-control" />
        <label class="form-label" for="loginPassword">Password</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Remember me </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-start">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" name="Login" class="btn btn-primary btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="../">Register</a></p>
      </div>
    </form>
  </div>
  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
    
  </div>
</div>
<!-- Pills content -->
</div>











<!-- Remove the container if you want to extend the Footer to full width. -->
<div class=" footer bg-dark  ">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white "
          style="background-color: dark"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0 vw-100">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              YouContacts
            </h6>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> TATA Avenue nasr </p>
            <p><i class="fas fa-envelope mr-3"></i> Mohamedhaki70@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +2126 41 72 59 30</p>
            <p><i class="fas fa-print mr-3"></i> +2126 41 72 59 30</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #dd4b39"
               href="#!"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>

            <!-- Linkedin -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #0082ca"
               href="#!"
               role="button"
               ><i class="fab fa-linkedin-in"></i
              ></a>
            <!-- Github -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #333333"
               href="#!"
               role="button"
               ><i class="fab fa-github"></i
              ></a>
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MedH</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
" ></script>
</body>
</html>


