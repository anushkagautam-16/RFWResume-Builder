<?php

require "partial/_dbConnection.php";


if(isset($_POST['submit'])){

    $sname=$_POST['sname'];
    $sloc=$_POST['sloc'];
    $degree=$_POST['degree'];
    $fos=$_POST['fos'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];

    $sql="insert into `education`(sname,sloc,degree,fos,sdate,edate) values ('$sname','$sloc','$degree','$fos','$sdate','$edate')";

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
    <div class="container" style="background-color:white;margin-left:350px;margin-right:350px;" >
    <form action="education.php" method="post">

          <div style="margin-top:80px;">
            <h1>Tell us about your education </h1>
            <p>Include every school, even if you're still there or didn't graduate.</p>
          </div>
          <div style="padding:10px;" width=600px>
             <div  style="display:flex;">
                 <div><label style="font-family:vardana;" for="sname"><b>School Name</b></label><br>
                 <input  style="padding:14px 110px;" type="text" placeholder="e.g:Oxford software institute" name="sname" required></div>
                 <div><label style="font-family:vardana;margin-left:15px;" for="sloc"><b>School Location</b></label><br>
                 <input  style="padding:14px 110px;margin-left:15px;" type="text" placeholder="e.g:New Delhi,India" name="sloc" required></div>
             
             </div>
             <div  style="margin-top:25px;">
                 <div><label style="font-family:vardana;" for="degree"><b>Degree</b></label><br>
                 <select id="degree" name="degree" style="padding:14px 315px;">
                     <option value="high school diploma">High school diploma</option>
                     <option value="GED">GED</option>
                     <option value="Associate of Arts">Associate of Arts</option>
                     <option value="Associate of Science">Associate of Science</option>
                     <option value="Bachelor of Arts">Bachelor of Arts</option>
                     <option value="Bachelor of Science">Bachelor of Science</option>
                     <option value="BBA">BBA</option>
                     <option value="MBA">MBA</option>
                     <option value="Master of Arts">Master of Arts</option>
                     <option value="Master of Science">Master of Science</option>
                     <option value="J.D.">J.D.</option>
                     <option value="M.D.">M.D.</option>
                     <option value="Ph.D">Ph.D</option>
                     <option value="Different degree">Different degree</option>
                     <option value="No degree">No degree</option>
                 </select>             
             </div>
             <div  style="display:flex;margin-top:25px;">
                 <div><label style="font-family:vardana;" for="fos"><b>Field of Study</b></label><br>
                 <input  style="padding:14px 80px;" type="text" placeholder="e.g:Financial Accounting" name="fos" required></div>
                 <div><label style="font-family:vardana;margin-left:15px;" for="sdate"><b>Graduation Start Date</b></label><br>
                 <input  style="padding:14px 50px;margin-left:15px;" type="date" name="sdate" id="sdate" required></div>
                 <div><label style="font-family:vardana;margin-left:15px;" for="edate"><b>Graduation End Date</b></label><br>
                 <input  style="padding:14px 50px;margin-left:15px;" type="date"  name="edate" id="edate" required></div>

              </div>
            
          </div>
          <div style="display:flex;margin-top:60px;">
              <div><button style="background-color:white; color:black;
                     padding: 12px 40px; cursor: pointer;"><a  href="btn1page5.php" style="text-decoration:none;color:black;"><b>BACK</b></a></button> </div> 
              <div><button style="background-color:white; color:black;margin-left:400px;
                     padding: 12px 40px; cursor: pointer;" type="submit" name="submit" onclick="myFunction()" ><b>SAVE</b></button>
              </div>
              <div><button style="background-color:rgb(243, 62, 62); color:white;margin-left:60px;
                     padding: 12px 40px; cursor: pointer;"><a  href="btn1page7.php" style="text-decoration:none;color:black;"><b>NEXT</b></a></button> </div> 
                     
          </div>

     </form>
   </div>
<script>
    function myFunction()
     {
       alert("Education data Saved Successfully click on next");
    }
</script>

</body>
</html>