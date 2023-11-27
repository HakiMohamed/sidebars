<?php
require '../phpFiles/page.php';
$ID=$_GET['id'];
$requiteSql="DELETE FROM contacts WHERE Id_contacts = $ID"; 
$query=mysqli_query($con,$requiteSql);
if(isset($query)){
header("location: view.php");
}
?>