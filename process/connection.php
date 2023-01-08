<?php
 $servername = "localhost";
 $username = "root";
 $password = '';
 $database = "project";

 $conn = mysqli_connect($servername,$username,$password,$database);

 if(!$conn){
    die("can not connect to the database". mysqli_connect_error());
 }
 ?>