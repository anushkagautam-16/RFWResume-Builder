<?php
require "partial/_dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['submit'])) {
    echo "hii meandar huu";
    $name = $_POST['name'];
    $profession=$_POST['profession'];
    $address = $_POST['address'];          
    $numberM = $_POST['number'];
    $email = $_POST['email'];       
    /*$password = $_POST['password'];
  $confi_password = $_POST['confi-password'];             
  $token = bin2hex(random_bytes(15));*/             

    $filename = $_FILES["uploadfile"]["name"];              
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "profile photo/" . $filename;
    $file_to_upload = move_uploaded_file($tempname, $folder);
    $passwordAlert;


    /*$sql = "INSERT INTO `massages` (`id`, `emailId`, `massage`, `dateTime`) VALUES ('$id', '$email', '$massage', current_timestamp())";*/
    //$sql = "INSERT INTO `users977` (`name`, `profilePhoto`, `address`, `state`, `city`, `email`, `mobile`, `description`, `gender`, `dateTime`,) VALUES ('$name', '$folder', '$address', '$state', '$city', '$email', '$numberM', '$description', '$gender', current_timestamp())";
    /* $sql = "INSERT INTO `users977` (`name`, `profilePhoto` , `address`, `state`, `city`, `email`, `mobile`, `password`, `gender`, `dateTime`) VALUES ('$name','$folder','$address', '$state', '$city', '$email', '$numberM', '$hash', '$gender', current_timestamp())";*/

    $sql = "INSERT INTO `users977` (`name`,`profession`, `profilePhoto`, `address`, `email`, `numberM`) values ('$name','$profession','$folder', '$address', '$email', '$numberM')";
    $result = mysqli_query($conn, $sql);


    /* echo '<script>alert("Thanks For Contacting US ") </script>';*/
    /* header("location:activate.php");*/
    if ($result) {
      echo "succeess data inserted";

      $sql = "SELECT id FROM users977 WHERE email='$email'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          echo '<li><a href="template1.php?catid=' . $id . '"> choose template 1 </a> <br></li>';
          echo '<li><a href="template2.php?catid=' . $id . '"> choose template 1 </a> <br></li>';
        }
      }
    } 
    else {
      echo "something went wrong";
    }
  }
}
?>     


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/googlefor.css"> 
 
     </head>
 <body>
        <div>
          <h1 style="margin-left:200px;">What’s the best way for employers to contact you?</h1>
          <p style="margin-left:200px;">We suggest including an email and phone number.</p>
        </div>
 <div class="container" style="background-color:white;display:flex;width:auto;margin-left:100px;" >
      
    <div class="form">
       <form action="form.php" method="post" enctype="multipart/form-data">
        <div>
             <div style="width:150px;height:80px;margin-left:230px;">
               <!-- <div><img src="Images/avatar6.jpg" width=150px height=200px style="margin-top:70px;">
                      <input name="uploadfile" type="file" class="input"></div>-->
                      
                      <div class="block2" >                    
                <img src="Images/avatar6.jpg" class="box2" id="img_file" width=150px height=200px >
                            
                </img>
                    
                <input type="file"  accept="image/*" class="form-control" id="img_file" name="img_file" required="true"  
                onchange="document.getElementById('img_file').src = window.URL.createObjectURL(this.files[0])" oninput="getImageValue()"></input>
                    
            </div>

                <div><button style="background-color:white; color:black; border-color:black;text-decoration:white;
                     padding: 10px 25px; cursor: pointer;"><a  href="btn1.php" style="text-decoration:none;color:black;"><b>UPLOAD PHOTO</b></a></button></div>
             </div>
             <div style="padding:60px;margin-top:250px;" >
                   <div><label style="font-family:vardana;" ><b>Your Name</b></label><br>
                   <input  style="padding:10px 185px;" type="text" placeholder="e.g:Varun Sharma" name="name" class="input" id="visily" oninput="getValue()"></div>
              
                  <div style="margin-top:20px;"><label style="font-family:vardana;" ><b>Profession</b></label><br>
                  <input  style="padding:10px 185px;"  type="text" placeholder="e.g:Software engineering" name="profession" class="input" id="visilyy" oninput="getValuee()"> </div>
                 
                  <div><label style="font-family:vardana;" ><b>Address</b></label><br>
                  <input  style="padding:10px 185px;" type="text" placeholder="e.g:89/9 nanda nagar" name="address" class="input" id="address" oninput="getAddressValue()"></div>
              
                  <div style="display:flex;margin-top:20px;">
                     <div><label style="font-family:vardana;"><b>Phone</b></label><br>
                     <input  style="padding:10px 43px;" type="text" placeholder="e.g:+91 22 45678899"  class="input" name="number" pattern="[0-9].{9,}" id="number" oninput="getNumberValue()" ></div>
                     <div><label style="font-family:vardana;margin-left:15px;"><b>Email</b></label><br>
                     <input  style="padding:10px 42px;margin-left:15px;" type="text" placeholder="e.g:sharma.varun@email.com"  name="email" id="email" oninput="getEmailValue()" ></div>
                  </div>
   
               </div>
        </div>
</form>
</div>
        <div width=450px height=500px>
           <?php
         echo '<!DOCTYPE html>
         <html>
         <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--<link rel="stylesheet" type ="text/css" href="Css/template1.css"/>-->
         </head>
         <body>
     
         <div class="info" style="background-color:whitesmoke;color:black;margin:20px;" >
         <div class="name" style="background-color:rgb(46, 40, 40);color:white;">
     
         <div style="display:flex;">
         <!--<input type="text" id=fnameresult>
         <input type="text" id="result">
         <span  id="result"> </span>
         -->
            <h1 id="resultName" style="font-style:verdana;font-size:32px;margin-left:60px;margin-top:2em;  ">Varun Sharma</h1><br>
            </div>
            <div><p style="margin-left:4em;font-style:verdana;"><b>Profession:</b>
            <span id="resultProfession">Software engineer</span></p></div>
          </div>

        <form action="/action_page.php" method="post">
        <div class="demo" style="display:flex;">
        <div class="container" style="background-color:white;color:black;margin-left:2em;">

                 <div><p>...</p>
                 </div>

                
         <!-----------------work details---------------->
                 <div class="work">
                     <div class="logo2" style="display:flex;">
                         <div>
                             <img src="Images/history.jpeg" widht=3.75em height=3.75em>
                         </div>


                         <div>
                             <h2 style="color:rgb(46, 40, 40);"> WORK HISTORY </h2>
                         </div>
                     </div>
                     <div class="WH" style="display:flex;">
                          <div>
                              <p><b>mar 2015-<br>current</b></p>
                          </div>
                          <div>
                          <p><b>software engineer</b><br>Compubotics,New Delhi<br>
                             <ul>
                               <li> Effective unsold products by introducing accessories and other add-ons and adding Rs 3000 as average monthly sales</li>
                               <li>Generted brand awareness and postive product impression to increase sales 22%</li>
                             </ul>   </p>
                         </div>
                     </div>
                     <div class="WH1" style="display:flex;">
                          <div>
                              <p><b>June 2013-<br>march 2015</b></p>
                          </div>
                          <div>
                              <p><b> Junior software engineer</b><br>Compubotics,New Delhi<br>
                              <ul>
                                <li> Created over 60 drinks per hour with consistently positive customer satisfaction scores</li>
                                <li>Learned every menu prepration and numerous off-label drinks to meet all customer needs</li>
                              </ul>   </p>
                          </div>
                     </div>
                 </div>                 

                 </div>
     
         
       <!-----------contact details------------------->
       <div class ="demo" style="background-color:whitesmoke;" width=9.375em>
          <div class="contact">
           <div class="logo" style="display:flex;">
                <div>
                 <img src="Images/contact.jpg" width=2.5em height=2.5em>
                </div>
                <div>
                 <h2 style="color:rgb(46, 40, 40);">CONTACT</h2>
                </div>
           </div>
             <div>
                <p style="margin-left:1em;"><b>ADDRESS:</b>
                <span id="resultAddress"> New Delhi ,India,112087 </span></p>
                <p style="margin-left:1em;"><b>PHONE:</b> <p id="resultNumber"> +91 22 12345677 </p></p>
                <p style="margin-left:1em;"><b>EMAIL:</b><span id="resultEmail"> mishra.varun@gamil.com </span></p>
             </div>
          </div>
       
     <!--------------------skills details---------------------->
         <div class="skills" style="background-color:whitesmoke;" width=9.375em >
           <div class="logo" style="display:flex;">
             <div>
                 <img src="Images/skills.png" width=4.375em height=3.375em>
             </div>
             <div>
                <h2 style="color:rgb(46, 40, 40);">SKILLS</h2>
             </div>
           </div>
           <div>
             <p> <ul><li>store closing and opening</li>
                      <li> sales expertise</li> 
                      <li>accurate money handling</li>
                      <li> store merchandising</li></ul></p>
          </div>
         </div>
         <!-----------------education details-------------->

       <div class="education">
                     <div class="logo2" style="display:flex;">
                         <div>
                                <img src="Images/education.jpeg" width=3.75em height=3.75em>
                         </div>
                         <div>
                               <h2 style="color:rgb(46, 40, 40);"> EDUCATION </h2>
                         </div>
                     </div>
                    <div class="UG">
                            <p><b>BSC in Computer Application:</b><br>
                                  Uneversity of delhi,New Delhi,India</p>
                    </div>
                     <div class="PG">
                          <p><b>MSC in Computer Science:</b><br>
                                 University of Mumbai,Mumbai,India</p>
                     </div>
                 </div>

                <!---------profile pic----------->
              <div>
                <img src="Images/avatar6.jpg" width=200px height=270px style="margin:15px;">
                <span id="resultImage"></span>
              </div>

       </div>
       
     
     </div>
     
     
     
     </form>
     </div>
     </body>
     </html>';
    ?>
  </div>


    <!--second container that show input -->
    
    


 <!--<script>
        visily.oninput =showValue;

        function showValue(){
            result.value=this.value;

        }
    </script>-->
<!-- 1 only for name   -->
<script>
      function getValue()
      {

      
      let txtName=document.getElementById("visily")
      let txtNameValue=txtName.value;

      let resultInName=document.getElementById("resultName")
      resultInName.innerText=txtNameValue
      }

    </script>
    <!-- 2 only for desc  -->
    <script>
    function getValuee()
      {

      
      let txtProfession=document.getElementById("visilyy")
      let txtProfessionValue=txtProfession.value;

      let resultProfession=document.getElementById("resultProfession")
      resultProfession.innerText=txtProfessionValue
      }

    </script>
    <script>
      function getAddressValue(){
      textAddress = document.getElementById("address")
      textAddressValue =textAddress.value;

      let resultAddress=document.getElementById("resultAddress")
      resultAddress.innerText=textAddressValue
      
      

      }
     
    </script>

<script>
      function getEmailValue(){
      textEmail = document.getElementById("email")
      textEmailValue =textEmail.value;

      let resultEmail=document.getElementById("resultEmail")
      resultEmail.innerText=textEmailValue
      
      

      }
     
    </script>

    <script>

id=""

function getNumberValue(){
      textNumber = document.getElementById("number")
      textNumberValue = textNumber.value;

      let resultNumber=document.getElementById("resultNumber")
      resultNumber.innerText=textNumberValue

      }
    </script>

    <script>
function getImageValue(){
  textImage document.getElementById("img_file")
  textImageValue = textImage.value;

  let resultImage = document.getElementById("resultImage")
  resultImage.innerText= textImageValue
}
</script>

    
</div>

    <div style="display:flex;">
            <div><button style="background-color:white; color:black; border-radius:10px;margin-left:200px;margin-top:50px;
                     padding: 12px 40px; cursor: pointer;"><a  href="btn1.php" style="text-decoration:none;color:black;"><b>BACK</b></a></button> </div> 
            <div><button style="background-color:white; color:black; border-radius:10px;margin-top:50px;margin-left:700px;
                     padding: 12px 40px; cursor: pointer;" type="submit" name="save"><b>SAVE</b></button>
            </div>
            <div><button style="background-color:rgb(243, 62, 62); color:white; border-radius:10px;margin-left:40px;margin-top:50px;
                     padding: 12px 40px; cursor: pointer;"><a  href="btn1page2.php" style="text-decoration:none;color:black;"><b>NEXT</b></a></button> </div> 
    </div>




 </body>
</html> 

