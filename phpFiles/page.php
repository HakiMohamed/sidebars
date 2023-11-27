
<?php
require'connexion.php';

if(isset($_POST['OK']) ){
  $nom=$_POST['Nom'];
$phone=$_POST['Tel'];
$Adress=$_POST['Adress'];
$Email=$_POST['Email'];
$requete="INSERT INTO `contacts`(`Nom`, `Tel`, `Adress`, `Email`) VALUES( '$nom','$phone','$Adress','$Email' )";
$query=mysqli_query($con,$requete);
if(isset($query)){
    echo '<div class="alert alert-success mt-5 alert-dismissible fade show" role="alert">
    <strong>Congratulations!</strong> inssertion has been succefuly added.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  
  header("location: ../user/view.php");
}
else{
    echo "<h1>insertion failed   mysqli_connect_error()   </h1>";
};
}else{
    echo "<h1>insertion failed   mysqli_connect_error()   </h1>";
}



?>



