
<!DOCTYPE html>
    <?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resume Builder</title>
        
        <link rel="stylesheet" type="text/css" href="Css/main.css"/>
        <link rel="stylesheet" type="text/css" href="Css/header.css"/>
        <link rel="stylesheet" type="text/css" href="Css/content.css"/>


    </head>
   
    
   <body >    
   <body class="body" >
 
    <div class="container" >
    <div class="row">         
         
       
        <!----------- main area of web site ---------------> 
        
        <div class="col12 " >   <!-- container-->   
            
            <!------------------ Menu Bar ---------------------->
            
            <div class="rowmenu">
                
                <?php include "header.php"?>
                               
            </div>  

             <!---------------- main ----------------------->
             <div class ="demo col12" style ="display:flex;background-color:whitesmoke;">
             <div class="text col6">
          
               <h1 style="font-size:60px;">The online resume builder getting folks <br> hired by BBC,
                 Google,<br> Apple, Tesla,<br> and Airbnb.</h1>

                    <h2 style="font-size:45px;">Build your brand-new resume in<br> as little as 5 minutes.</h2>
                    <h2 style="font-size:45px;font-style:bold;"> Try it for free.</h2>
                    <button   style="background-color:rgb(243, 62, 62); color:white; border-radius:20px;decoration:none;
                     padding: 20px 50px; margin: 4px 2px;cursor: pointer;"><a href="btn1.php" style="text-decoration:none;color:black;"><b>GET STARTED NOW</b></a></button>
                  <p> No Credit card Required</p>
                  <div>
                    <img src="Images/image1.webp" widht=400px height=400px>
                  </div>

              </div>
                    <div class="pic">
                       <img src="Images/resumee2.jpg"  style="border-radius:20px;margin-left:850px;margin-top:200px;" widht=700px
                        height=850px>
                   </div>
             </div >
                  <!-------------main2------------->

             <div class="demo1" style="backgorund-color:white;">
             <h1 style="text-align:center;margin:50px;">Just four simple steps to download your resume:</h1>
             <div class="pic2" style="display:flex;">
                <div>
                   <img src="Images/res1.png" style="margin-left:250px;margin-top:50px;" widht=150px height=250px><br>
                   <p style="margin-left:255px;font-size:25px;"><b>1.<br>pick a template</b></p>
                </div>
                <div>
                   <img src="Images/res2.png" style="margin-left:50px;margin-top:50px;" widht=150px height=250px><br>
                   <p style="margin-left:55px;font-size:25px;"><b>2.<br>make your resume</b></p>
                </div>
                <div>
                   <img src="Images/res3.png" style="margin-left:50px;margin-top:50px;" widht=150px height=250px><br>
                   <p style="margin-left:55px;font-size:25px;"><b>3.<br>customize the design</b></p>
                </div>
                <div>
                   <img src="Images/res4.png" style="margin-left:50px;margin-top:50px;" widht=150px height=250px><br>
                   <p style="margin-left:55px;font-size:25px;"><b>4.<br>download pdf</b></p>
                </div>

             </div>
             <div>
             <button style="background-color:rgb(243, 62, 62); color:black; border-radius:40px;margin-left:600px;margin-top:50px;
                     padding: 25px 70px; cursor: pointer;"><a  href="btn1page0.php" style="text-decoration:none;color:black;"><b>CREATE MY RESUME</b></a></button>
             </div>
             </div>
             <!--------------------main3-------------------->

             <div class="demo2" style="background-color:white;">
             <h1 style="text-align:center;margin:50px;">What’s in it for you?<br>Here’s what our resume maker has to offer:</h1>
                <div class="pic3" style="display:flex;">
                      <div>
                          <img src="Images/resu1.png" style="margin-left:200px;margin-top:60px" widht=350px height=400px>
                      </div>
                      <div class="text1"  style="margin:90px;padding:60px;">
                      <h2><b>1. Professional templates for all types of jobs</b></h2><br>
                      <p>Our resume creator comes with 18 fully customizable templates. You’ll get advice on which one
                         to pick depending on your industry, seniority level, and the kind of company you’re applying to.</p>
                      </div>
                </div>
                <div class="pic4" style="display:flex;">
                      <div class="text1" style="padding:65px;margin:90px;"><h2><b>2. Resume score</b></h2><br>
                      <p>Once you’re done with filling your document in the editor, our resume builder will score it against your
                         competitors and give you detailed tips on how exactly to improve your resume.</p>
                      </div>
                      <div>
                          <img src="Images/resu2.png" style="margin:40px;" widht=350px height=400px>
                      </div>
                </div>
                <div class="pic5" style="display:flex;">
                      <div>
                          <img src="Images/resu3.png" style="margin-left:200px;margin-top:60px" widht=350px height=400px>
                      </div>
                      <div class="text1"  style="margin:90px;padding:70px;">
                      <h2><b>3. Matching cover letter builder</b></h2><br>
                      <p>You can create a cover letter that matches the design of your resume—recruiters will appreciate your
                         professionalism and attention to detail. Read more about our cover letter builder’s features here.</p>
                      </div>
                </div>
                <div class="pic6" style="display:flex;">
                      <div class="text1" style="padding:70px;margin:90px;"><h2><b>4. Generate a resume & download in PDF or DOC 
                        without limits</b></h2><br>
                      <p>Create, save, and download multiple versions of your resume to apply for different positions. Switch between
                         templates in a flash. Add or remove content. Our easy resume generator will make sure the layout stays intact.
                          You can download your resume in PDF, Word, or even as an image. Make and download your resume with no
                           compromises.</p>
                      </div>
                      <div>
                          <img src="Images/resu4.png" style="margin:40px;" widht=350px height=400px>
                      </div>
                </div>
                <div class="pic7" style="display:flex;">
                      <div>
                          <img src="Images/resu5.png" style="margin-left:200px;margin-top:60px" widht=350px height=400px>
                      </div>
                      <div class="text1"  style="margin:90px;padding:70px;">
                      <h2><b>5. Resume creation made easy with ready-to-use suggestions for major professions</b></h2><br>
                      <p>When making a resume with our online resume builder, you’ll get dozens of personalized content suggestions for
                         every section. All of the pre-written tips have been curated by our team of Certified Professional Resume 
                         Writers.</p>
                      </div>
                </div>
                <div class="pic8" style="display:flex;">
                      <div class="text1" style="padding:85px;margin:90px;"><h2><b>6. Upload and automatically reformat your old resume</b></h2><br>
                      <p>Already have a resume? Disappointed with the boring layout? Upload it to our builder with a single click and
                         let our resume software make it look just right. All your resumes are saved in our cloud, so you can edit them
                          as your career progresses.</p>
                      </div>
                      <div>
                          <img src="Images/resu6.png" style="margin:40px;" widht=350px height=400px>
                      </div>
                </div>
                      
                        
            </div>

                           <!------------------content1------------->
                 <div class="menu">
                
                        <?php include "content.php"?>
                               
                </div>  
          
        
        </div>
           
     </div>
    </div>  
    
    </body>
 </html>