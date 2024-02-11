<?php
require "partial/_dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['submit'])) {
    echo "hii meandar huu";
    $name = $_POST['fname'];
    $address = $_POST['address'];
    $description = $_POST['desc'];
    $numberM = $_POST['number'];
    $email = $_POST['email'];
    /*$password = $_POST['password'];
  $confi_password = $_POST['confi-password'];
  $token = bin2hex(random_bytes(15));*/

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "profile photo/" . $filename;
    $file_to_upload = move_uploaded_file($tempname, $folder);
    $g;
    $passwordAlert;


    /*$sql = "INSERT INTO `massages` (`id`, `emailId`, `massage`, `dateTime`) VALUES ('$id', '$email', '$massage', current_timestamp())";*/
    //$sql = "INSERT INTO `users977` (`name`, `profilePhoto`, `address`, `state`, `city`, `email`, `mobile`, `description`, `gender`, `dateTime`,) VALUES ('$name', '$folder', '$address', '$state', '$city', '$email', '$numberM', '$description', '$gender', current_timestamp())";
    /* $sql = "INSERT INTO `users977` (`name`, `profilePhoto` , `address`, `state`, `city`, `email`, `mobile`, `password`, `gender`, `dateTime`) VALUES ('$name','$folder','$address', '$state', '$city', '$email', '$numberM', '$hash', '$gender', current_timestamp())";*/

    $sql = "INSERT INTO `users977` (`name`, `profilePhoto`, `address`, `email`, `mobile`, `description`,, `dateTime`, `id`) VALUES ('$name', '$folder', '$address', '$email', '$numberM', '$description', current_timestamp(), NULL)";
    $result = mysqli_query($conn, $sql);


    /* echo '<script>alert("Thanks For Contacting US ") </script>';*/
    /* header("location:activate.php");*/

    if ($result) {
      echo "<script>alert('succeess data inserted')</script>";

      $sql = "SELECT id FROM users977 WHERE email='$email' AND state='$state'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          echo '<li><a href="template1.php?catid=' . $id . '"> choose template 1 </a> <br></li>';
          echo '<li><a href="template2.php?catid=' . $id . '"> choose template 1 </a> <br></li>';
        }
      }
    } else {
      echo "<script>alert('somethink went wrong')</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/googlefor.css">
</head>

<body>

<div style="display: flex; flex-wrap: wrap;  justify-content: center;" class="container-form">

<!-- first container that take input -->
  <div class="wrapper">
    <div class="form">
      <form action="googleform.php" method="post" enctype="multipart/form-data">
        <div class="inputfield">
          <label>Full Name</label>
          <input name="fname" type="text" class="input" id="visily" oninput="getValue()">
         
        </div>
        <div class="inputfield">
          <label>Photo</label>
          <input name="uploadfile" type="file" class="input">
        </div>
        <!--<div class="inputfield">
        <label for="">Skill</label>
        <div class="custom_select" >
            <select name="brandlist[]" multiple >
              <option  value="">Select</option>
              <option value="Programming">Programming</option>
              <option value="java">java</option>
              <option value="C++">C++</option>
              <option value="Web Devlopment">Web Devlopment</option>
              <option value="Oops">Oops</option>
              <option value="Php">Php</option>
            </select>
          </div>
     </div> -->

        <div class="inputfield">
          <label>Address</label>
          <input type="text" class="input" name="address" id="address" oninput="getAddressValue()">
        </div>
        <!-- <div class="inputfield">
          <label>Education</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="male">BCA</option>
              <option value="female">MCA</option>
              <option value="female">BSC</option>
              <option value="female">Btech</option>
              <option value="female">Chemistry</option>
            </select>
          </div>
       </div> -->
        <div class="inputfield">
          <label>Gender</label>
          <input type="radio" name="d_gender" value="male">Male
          <input type="radio" name="d_gender" value="female">Female

        </div>
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email" id="email" oninput="getEmailValue()">
        </div>
        <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="number" pattern="[0-9].{9,}" id="number" oninput="getNumberValue()">
        </div>
        <div class="inputfield">
          <label>description</label>
          <textarea class="textarea" name="desc" id="desc" oninput="getdescValue()" ></textarea>
        </div>
        <!-- <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" >
       </div> -->
        <div class="inputfield">
          <label>city</label>
          <input type="text" class="input" name="city">
        </div>
        <div class="inputfield">
          <label>state</label>
          <input type="text" class="input" name="state">
        </div>
        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
        </div>
        <div class="inputfield">
          <input type="submit" value="Create Resume" class="btn" name="submit">
        </div>
      </form>
    </div>
  </div>
  <!--second container that show input -->
  <div class="float" style="width:50px;height:70px;">
    <?php
    echo '<!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" type ="text/css" href="Css/template1.css"/>-->
  </head>
  <body>
  
  <div class="info" style="background-color:whitesmoke;     width: 618px; color:black;text-align:left;margin-right:300px;" >
  <div class="name" style="background-color:rgb(46, 40, 40);color:white;"  height=130px >
  <!--<input type="text" id=fnameresult>
  <input type="text" id="result">
  <span  id="result"> </span>
  -->
         <h1 id="resultName" style="font-style:verdana;font-size:32px;margin-left:60px;margin-top:40px;  ">type your name</h1><br>
  </div>
  <form action="/action_page.php" method="post">
  <div class="demo" style="display:flex;">
    <div class="container" style="background-color:white;color:black;margin-left:100px;" widht=750px >
              <div><p  id="resultDesc">Motivated sales associated with 5 years of experience bossting sales and customer loyalty through 
                 individualized service.Resourceful expert at learning customer needs,directing to describe
                 merchandise and upselling to meet sales quotes.committed to strenghten customer
                 experience with positivity and professionalizism when answeing requests and processing sales</p>
              </div>
      <!-----------------work details---------------->
              <div class="work">
                  <div class="logo2" style="display:flex;">
                      <div>
                          <img src="Images/history.jpeg" widht=60px height=60px>
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
                            <li>Used consulatative sales approach to understand customer needs and recommend relevent offreing</li>
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
                             <li>Opsold baked goods and extra shots with beverage, incresing store sales Rs 3800 per month</li>
                           </ul>   </p>
                       </div>
                  </div>
              </div>
  
           <!-----------------education details-------------->
       <div class="education">
           <div class="logo2" style="display:flex;">
               <div>
                      <img src="Images/education.jpeg" width=60px height=60px>
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
    </div>
  
  <!-----------contact details------------------->
    <div class ="demo" style="background-color:whitesmoke;" width=150px>
       <div class="contact">
        <div class="logo" style="display:flex;">
             <div>
              <img src="Images/contact.jpg" width=45px height=45px>
             </div>
             <div>
              <h2 style="color:rgb(46, 40, 40);">CONTACT</h2>
             </div>
        </div>
          <div>
             <p style="margin-left:100px;"><b>ADDRESS:</b>
            
             <h5 ></h5>
             <span id="resultAddress"> </span>
             
             </p>
             
             
             <p style="margin-left:100px;"><b>PHONE:</b> <p id="resultNumber"> +91 22 12345677 </p> </p>
             <p style="margin-left:100px;"><b>EMAIL:</b>
             <span id="resultEmail"> </span>
           </p>
          </div>
       </div>
    
  <!--------------------skills details---------------------->
      <div class="skills" style="background-color:whitesmoke;" width=150px >
        <div class="logo" style="display:flex;">
          <div>
              <img src="Images/skills.png" width=70px height=60px>
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
    </div>
  </div>
  
  
  
  </form>
  </div>
  </body>
  </html>';
    ?>
  </div>
  </div>
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

function getdescValue()
      {

      
      let txtDesc=document.getElementById("desc")
      let txtDescValue=txtDesc.value;

      let resultInDesc=document.getElementById("resultDesc")
      resultInDesc.innerText=txtDescValue
      }

    </script>
    <script>
      function getAddressValue(){
      textAddress = document.getElementById("address")
      textAddressValue =textAddress.value;

      let resultAdrress=document.getElementById("resultAddress")
      resultAdrress.innerText=textAddressValue
      
      

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



</body>


</html>