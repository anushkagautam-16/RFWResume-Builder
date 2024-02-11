<?php

require "partial/_dbConnection.php";


if(isset($_POST['submit'])){

    $skills=$_POST['skills'];

    $sql="insert into `skills`(skills) values ('$skills')";

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

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Css/header.css"/>
        <link rel="stylesheet" type="text/css" href="Css/btn1page8.css"/>


     </head>
 <body>

           
<div class="row" >
   <form action="skills.php" method="post" style="display:flex;">

            <div class="container" style="margin-left:150px;margin-top:120px;" >
                 <div class="scroller"  style="overflow-y:scroll;border-radius:10px;" >
                
                            
                 <div><header style="overflow:hidden;positon:fixed;text-decoration:underline;font-size:20px;"><b>Ready-to-use-Examples</b></header></div>

                       <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button" style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div><strong>Expert Recommanded</strong>
                               <br>Detail-oriented team player with strong organization skills.Ability to handle multiple projects simultaneously with a high degree of accuracy.</div></div>
           
                    <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button" style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div><strong>Expert Recommanded</strong>
                               <br>Hardworking and passionate job seeker with strong organizational skills eager to secure entry-level[JOV TITLE]positon.Ready to help team achieve company goals.</div></div>

                     <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button" style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div><strong>Expert Recommanded</strong>
                               <br>To seek and maintain full-time postion that offers professional challenges utilizing interpersonal skills ,excellent time management and problem-solving skills.</div></div>

                    <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button" style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;" type="submit" name="add" onclick()="myFunction1()">ADD</button>
                            <div><strong>Expert Recommanded</strong>
                               <br>Organized and dependable candidate successful at managing multiple priorities with a positive attitude.Willingness to take on added responsibilities to meet team goals.</div></div>
                  </div>
             </div>
             <div class="col-6" style="background-color:whitesmoke;padding:80px;margin-left:100px;width:950px;"  >
                              <div><h1>Professional Summary</h1></div>
                              
                              <div>
                                 <section>
                                    <textarea style=" width:550px;height:400px;padding: 12px 20px;border: 2px solid #ccc;border-radius: 4px;background-color:white;
                                    font-size: 20px;resize:none;" type="text" name="skills" onsubmit()="return myFunction1()">write your Summary here</textarea>
                                 </section>
                              </div>
                              
                              <div style="display:flex;margin-top:50px;">
                                  <div><button style="background-color:white; color:black; border-radius:10px;margin-left:70px;margin-top:20px;
                                     padding: 12px 40px; cursor: pointer;"><a  href="work.php" style="text-decoration:none;color:black;"><b>BACK</b></a></button> </div> 
                                  <div><button style="background-color:white; color:black;margin-left:300px;
                                     padding: 12px 40px; cursor: pointer;" type="submit" name="submit" onclick="myFunction()"><b>SAVE</b></button> </div>
                                  <div><button style="background-color:rgb(243, 62, 62); color:white;margin-left:50px;
                                  padding: 12px 40px; cursor: pointer;"><a  href="btn1page5.php" style="text-decoration:none;color:black;"><b>NEXT</b></a></button> </div>           
                             </div>
    </form>
</div>
<script>
      function myFunction()
      {
        alert("skills data stored successfully click on next");
      }
      function myFunction1()
      {
         return "Organized and dependable candidate successful at managing multiple priorities with a positive attitude.Willingness to take on added responsibilities to meet team goals.";
      }
</script>
</body>
</html>