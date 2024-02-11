<?php
$servername="localhost";
$username="root";
$password="";
$database="login";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn)
{
    echo"connection stablished successfully";
    
}
/*else{
    die("error detected".mysqli_error($conn));  
}*/
?>


<?php
session_start();
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$con = mysqli_connect('localhost:3306','root','');
mysqli_select_db($con,'login');
$q="select * from admin where a_username='$username' OR a_email = '$username' AND a_pass='$password'";
$result=mysqli_query($con,$q);
$num =mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num==1)
{
$_SESSION['username']=$row['a_name'];
header('location:http://localhost/Blood/Adminmain.php');}
else
{
  header('location:http://localhost/Blood/index.php'); 
  print "wrong password";
  
}

?>