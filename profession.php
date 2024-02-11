<?php

require "partial/_dbConnection.php";


if(isset($_POST['submit'])){

    $professional=$_POST['professional'];

    $sql="insert into `profession`(professional) values ('$professional')";

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

            <div class="rowmenu">
                
                <?php include "header.php"?>
                               
            </div>  
<div class="row" >
   <form action="profession.php" method="post"style="display:flex;" >

            <div class="container" style="margin-left:150px;margin-top:120px;" >
                 <div class="scroller"  style="overflow-y:scroll;" >
                
                            
                 <div><header style="overflow:hidden;positon:fixed;text-decoration:underline;font-size:20px;"><b>Ready-to-use-Examples</b></header></div>

                       <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button" style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><strong>Expert Recommanded</strong>
                               <br>complaint resolution</div></div>

                      <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><strong>Expert Recommanded</strong>
                               <br>Sales expertise</div></div>

                     <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><strong>Expert Recommanded</strong>
                               <br>Report prepration</div></div>

                      <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><strong>Expert Recommanded</strong>
                               <br>Professional telephone demeanor</div></div>

                               <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Warehousing functions</div></div>

                            <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Retail store support</div></div>

                            <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Stock management</div></div>

                            <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Staff education and training</div></div>

                            <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>International sales support</div></div>

                               <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Service standard compliance</div></div>

                               <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Multi-line phone talent</div></div>

                               <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Technical support</div></div>

                               <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Money handling abilities</div></div>

                               <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Administrative support</div></div>

                            <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Training development aptitude</div></div>

                            <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Creative problem solving</div></div>

                            <div class="example-item" style="display:flex;margin:5px;">
                            <button aria-label="add complaint resolution" type="button"style="height: 40px;width: 40px;border-radius: 4px;background-color: #3983fa;
                               border: 0;margin-right: 16px;cursor: pointer;color: #fff;outline: none;font-weight: 600;letter-spacing: 0.5px;margin-top: 4px;font-size: 0.8rem;">ADD</button>
                            <div data text="complaint resolution"><br>Retails materials management</div></div>



                 
</div>
                   
</div>
                      <div class="col-6" style="background-color:whitesmoke;padding:80px;margin-left:150px;width:950px;"  >
                              <div><h1>What Skills would you like to highlight?</h1></div>
                              
                              <div>
                                 <section>
                                    <textarea style=" width:550px;height:400px;padding: 12px 20px;border: 2px solid #ccc;border-radius: 4px;background-color:white;
                                    font-size: 20px;resize:none;" type="text" name="professional">write your skills here</textarea>
                                 </section>
                              </div>
                              
                              <div style="display:flex;margin-top:50px;">
                                  <div><button style="background-color:white; color:black; border-radius:10px;margin-left:70px;margin-top:20px;
                                     padding: 12px 40px; cursor: pointer;"><a  href="work.php" style="text-decoration:none;color:black;"><b>BACK</b></a></button> </div> 
                                  <div><button style="background-color:white; color:black;margin-left:300px;
                                     padding: 12px 40px; cursor: pointer;" type="submit" name="submit" onclick="myFunction()"><b>SAVE</b></button> </div>
                                  <div><button style="background-color:rgb(243, 62, 62); color:white;margin-left:50px;
                                  padding: 12px 40px; cursor: pointer;"><a  href="btn1page9.php" style="text-decoration:none;color:black;"><b>NEXT</b></a></button> </div>           
                      </form>
                     </div>
                        
       <script>
      function myFunction()
      {
        alert(" professional data stored successfully click on next");
      }
      </script>
</div>
</body>
</html>