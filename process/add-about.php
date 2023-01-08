<?php
include 'connection.php';
$id = $_POST['id'];
$about = $_POST['about'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];


$query = "UPDATE users SET  about='$about' WHERE id='$id'";


if(mysqli_query($conn,$query)){
    echo "updated";
    header("Location:../admin.php");
}
else
{
    die("error".mysqli_connect_error());

}
?>
Footer
