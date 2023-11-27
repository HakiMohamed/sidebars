<?php  


   require'../phpFiles/Connexion.php';
   $id=$_POST['id'];
   $Fullname=$_POST["Nom"];
   $phone=$_POST["Tel"];
   $adresse=$_POST["Adress"];
   $email=$_POST["Email"];
 
   
     $sqlrq="UPDATE `contacts`  SET Nom='$Fullname', Tel= '$phone' , adress='$adresse', Email = '$email' WHERE Id_contacts=$id ";
     $qu = mysqli_query($con, $sqlrq); 

     if($qu){
      header("Location: ./view.php");

     }
     else{
      echo "failed";
     }
   
     


?>