<?php
 include('connection.php');
 if($_FILES['image']['size']==0){
  $errmsg = "image must be upload";
 }
 if(isset($errmsg)==1){
  header("Location:../admin.php?errmsg=".$errmsg);
 }else{
 $imageName =  $_FILES['image']['name'];
 $imageTempName = $_FILES['image']['tmp_name'];

 $location = "../img/blog/".$imageName;
 $imagelocation= "img/blog/".$imageName;

 if(move_uploaded_file($imageTempName,$location)){
   $query = "INSERT INTO users(profile_img) 
   values ('$imagelocation')";

   if(mysqli_query($conn,$query)){
    $msg = "success";
    header("Location:../admin.php?msg = ".$msg);
   }else{
     $msg = "error";
     header("Location:../admin.php?errmsg = ".$msg);
   }
 }
 }
 echo "test";
?>