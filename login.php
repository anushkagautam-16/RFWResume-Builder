<?php
 include 'data.php'
 if(isset($_POST['submit'])){
      $uname=$_POST['uname'];
      $pass=$_POST['pass'];
      $number=$_POST['number'];

      $sql="insert into`login`(uname,pass,number)values('$uname','$pass','$number')";
      $result=mysqli_query($con,$sql);

      if($result)
      {
          echo"data insert successfully";
      }
      else{
           die(musqli_error($con));
      }
 }
 ?>


<!DOCTYPE html>
<html>
   <head>
     <title>Form Validations</title>
     <script type="text/javascript">
      function validate()
      {
           var username=document.getElementById("uname");
           var password=document.getElementById("pass");

           if(username.value.trim()==""|| password.value.trim()=="")
           {
               alert("no blank values allowed");
               return false;
           }
           else
           {
                  true;
           }
           

      }

    </script>
</head>
<body>
<form onsubmit=" return validate()" action="message.html" method="post" >

       <input id="uname" placeholder="Username" type="text" name="uname" required/><br><br>
       <input id="pass" placeholder="Password" type="password" name="pass" required/><br><br>
       <input id="number" placeholder="number" type="digits" name="number" required/><br><br>

        <button type="submit">Submit</button>
</form>

</body>
</html>