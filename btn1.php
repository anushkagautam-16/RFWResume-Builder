<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: red;
  color: white;
  padding: 12px 14px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 160px;
  right: 150px;
  width: 120px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
 /* margin-left:435px;
  margin-bottom:250px;*/
  border: 3px solid #f1f1f1;
  z-index: 9;
  padding:10px;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: rgb(84, 175, 235);
  color: white;
  padding: 14px 16px;
  border: none;
  cursor: pointer;
  width: 40%;
  margin-bottom:10px;
  margin-left:30px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
     </head>
 <body>
    <div class="container" style="background-color:white;">    
        <div>
            <h1 style="text-align:center;padding:30px;"> How do you want to start? </h1>
        </div>
        <div class="start"  style="display:flex;overlap:hover;">
             <div style="background-color:white; border: 1px solid black; color:black;margin-left:430px;margin-top:50px;
                      cursor: pointer;padding:30px;" width=350px height=350px>
                     <div ><img src="Images/resum1.png" style="margin-left:90px;" width =60px height=65px></div>
                     <div><a href="form.php" style="text-decoration:none;color:black;"><h3 style="text-align:center;"> CREATE A NEW RESUME </h3><br>
                          <p style="text-align:center;color:black;">We will help you to create a resume<br> step-by-step</p></a>
                     </div>
                           
             </div>
             <div style="background-color:white; color:black;margin-left:50px;margin-top:50px;outline:2px solid whitesmoke;
                      cursor: pointer;padding:20px;" width=350px height=350px>
                     <div ><img src="Images/resum2.png" style="margin-left:90px;" width =80px height=85px></div>
                     <div><h3 style="text-align:center;">I ALREADY HAVE A RESUME </h3><br>
                          <p style="text-align:center;">We'll re-formate it and fill in your <br>information so you don't have to</p>
                     </div>
                           
             </div>
            
           
        </div>
   </div>
   <button class="open-button" onclick="openForm()">next</button>

<div class="form-popup" id="myForm">
  <form action="form.php" class="form-container">
    <h1 style="text-align:center;">Create New Resume?</h1>
    <h2>By selecting Create New Resume, your content will<br> be permanently deleted.</h2>
    <div style="display:flex;">
    <button type="submit" class="btn">Create New Resume</button>
    <button style="margin-left:10px;" type="button" class="btn cancel" onclick="closeForm()">Continue Editing</button></div>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none"; 
}
</script>


</body>
</html>