<?php
$servername="localhost";
$username="root";
$password="";
$database="resume";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo'SUCCESS';
    
}
?>