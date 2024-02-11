<?php

require "partial/_dbConnection.php";


if(isset($_POST['submit'])){

    $job=$_POST['job'];
    $emp=$_POST['emp'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];

    $sql="insert into `work`(job,emp,city,country,sdate,edate) values ('$job','$emp','$city','$country','$sdate','$edate')";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo "data save successfully";
    }
    else{
        die(mysqli_error($conn));
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
 <body>
    <div class="container" style="background-color:white;margin-left:400px;margin-right:400px;" >
    <form action="work.php" method="post">

          <div style="margin-top:80px;">
            <h1>Tell us about your most recent job </h1>
            <p>We’ll start there and work backward.</p>
          </div>
          <div style="padding:10px;" width=600px>
             <div  style="display:flex;">
                 <div><label style="font-family:vardana;" for="job"><b>Job Title</b></label><br>
                 <input  style="padding:14px 90px;" type="text" placeholder="e.g:Retails sales associate" name="job" required></div>
                 <div><label style="font-family:vardana;margin-left:15px;" for="emp"><b>Employer</b></label><br>
                 <input  style="padding:14px 90px;margin-left:15px;" type="text" placeholder="e.g:H&M" name="emp" required></div>
             
             </div>
             <div  style="display:flex;margin-top:25px;">
                 <div><label style="font-family:vardana;" for="city"><b>City</b></label><br>
                 <input  style="padding:14px 90px;" type="text" placeholder="e.g:New Delhi" name="city" required></div>
                 <div><label style="font-family:vardana;margin-left:15px;" for="country"><b>Country</b></label><br>
                 <input  style="padding:14px 90px;margin-left:15px;" type="text" placeholder="e.g:India" name="country" required></div>
             
             </div>
             <div  style="display:flex;margin-top:25px;">
                 <div><label style="font-family:vardana;" for="sdate"><b>Start Date</b></label><br>
                 <input  style="padding:14px 105px;" type="date" placeholder="e.g:20/12/2000" name="sdate" required></div>
                 <div><label style="font-family:vardana;margin-left:15px;" for="Edate"><b>End Date</b></label><br>
                 <input  style="padding:14px 105px;margin-left:15px;" type="date" placeholder="e.g:23/12/2015" name="edate" required></div>
             
              </div>
            
          </div>
          <div style="display:flex;margin-top:60px;">
              <div><button style="background-color:white; color:black;
                     padding: 12px 40px; cursor: pointer;"><a  href="btn1page3.php" style="text-decoration:none;color:black;"><b>BACK</b></a></button> </div> 
              <div><button style="background-color:white; color:black;margin-left:400px;
                     padding: 12px 40px; cursor: pointer;" type="submit" name="submit" onclick="myFunction()"><b>SAVE</b></button>
                     </div>

              <div><button style="background-color:rgb(243, 62, 62); color:white;margin-left:60px;
                     padding: 12px 40px; cursor: pointer;"><a  href="btn1page5.php" style="text-decoration:none;color:black;"><b>NEXT</b></a></button> </div> 
                     
          </div>
      </form>
   </div>  
<script>
      function myFunction()
      {
        alert(" Work data stored successfully click on next");
        header('location:http://localhost/resume/btn1page5.php');

      }
</script>



</body>
</html>