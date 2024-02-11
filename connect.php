
<?php
  $name=$_POST['name'];
  $psw=$_POST['psw'];

  //database
  $conn = mysqli_connect('localhost:80','root','');
  mysqli_select_db($conn,'resume');
  if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
  }else{
    $stmt=$conn->prepare("insert into register(name,psw)values(?,?)");
    $stmt->bind_param("ss",$name,$psw);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $stmt->close();
  }

  ?>