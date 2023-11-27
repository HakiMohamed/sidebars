<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/imgs/Sans titre.png" type="image/x-icon">
  <link rel="stylesheet" href="./bootstrap-icons-1.11.1/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="./css/bootstrap.min.css" rel="stylesheet"><title>Register</title>
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



<div class="container mt-5 mb-4 ">   

<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mt-5" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link  mt-5" id="tab-login"  href="./index.php" role="tab"
      aria-controls="pills-login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a  class="nav-link active mt-5" id="tab-register"  href="./Register.php" role="tab"
      aria-controls="pills-register" aria-selected="false">Register</a>
  </li>
</ul>
<!-- Pills navs -->



<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form  method="POST">
      

<?php
require'./phpFiles/Connexion.php';
if(isset($_POST['submit_btn']) ){
$nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$Email= htmlspecialchars(trim(strtolower($_POST['Email'])));
$Password= md5(trim(strtolower($_POST['Pswd'])));


$check_email_query ="SELECT Email FROM utilisateur WHERE Email = '$Email' LIMIT 1";
$check_email_query_run = mysqli_query($con, $check_email_query);

if(mysqli_num_rows($check_email_query_run) > 0){

echo"Email already exists";
header("location: ./Register.php");

}
else{


  $requete="INSERT INTO `utilisateur`(Nom,Prenom,Email,Pswd) VALUES( '$nom','$Prenom','$Email','$Password')";
  $query=mysqli_query($con,$requete);
  if(isset($query)){
    echo '<div class="alert alert-success mt-5 alert-dismissible fade show" role="alert">
    <strong>Congratulations!</strong> Registration successfull.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  else{
  echo '<div class="alert alert-danger mt-5 alert-dismissible fade show" role="alert">
  <strong>Attention!</strong> Registration faield.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
mysqli_error($con);
 }

  }
 

}









?>
      <div class="text-center mb-3">
        
      <!-- Name input -->
      <div class="form-outline mb-4 text-start">
      <label class="form-label text-start" for="registerName">Name</label>
        <input type="text" id="registerName" name="Nom" class="form-control" required />
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4 text-start">
      <label class="form-label" for="registerUsername">Username</label>
        <input type="text" id="registerUsername" name="Prenom" class="form-control" required  />
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4 text-start">
      <label class="form-label" for="registerEmail">Email</label>
        <input type="email" id="registerEmail" name="Email" class="form-control" required  />
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4 text-start">
      <label class="form-label" for="registerPassword">Password</label>
        <input type="password" id="registerPassword" name="Pswd" class="form-control" required  />
      </div>

    

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
          aria-describedby="registerCheckHelpText" required  />
        <label class="form-check-label" for="registerCheck">
          I have read and agree to the terms
        </label>
      </div>

      <!-- Submit button -->
      <button type="submit" name="submit_btn" class="btn btn-primary btn-block mb-4">Register Now</button>

      <!-- Register buttons -->
      
    </form>
  </div>

  
  
</div>
<!-- Pills content -->
</div>














<!-- Remove the container if you want to extend the Footer to full width. -->
<div class=" footer bg-dark w-100 ">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>


