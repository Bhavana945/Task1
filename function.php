<?php
include("config.php");
  if(isset($_POST['submit']))
    {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $Rollnumber = $_POST['Rollnumber'];
    $Message = $_POST['Message'];
    
    $result=mysqli_query($mysqli,"INSERT INTO register1 values('$Username', '$Password', '$Email', '$Rollnumber','$Message')");
  
    if($result)
    {
    header("Location:index.php");
    } 
    else{
        echo "failed";
    }
   
    }
?>