<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
 <body>
 <div class="form-popup" id="myForm" style="display: none;position: fixed;bottom: 0; margin-left:500px;margin-bottom:150px;z-index: 9;">
  <form action="btn1page01.php" class="form-container">
  <h1 style="text-align:center;padding:20px;font-size:44px;"> Are You a Student? </h1>
  <div style="display:flex;overlap:hover;">
             <div style="background-color:white; border: 1px solid black; color:black;margin-top:10px;margin-left:30px;
                      cursor: pointer;padding:20px; width:180px; height:100px;font-size:20px;border-radius:8px;">
                      <a id="page002" href="btn1page002.php" onclick="page002(this); return false">
                      <div><h3 style="text-align:center;margin:10px;">Yes</h3></div></a>
            </div>
            <div style="background-color:white; border: 1px solid black; color:black;margin-top:10px;margin-left:25px;
                      cursor: pointer;padding:20px; width:180px; height:100px;font-size:20px;border-radius:8px;">
                     <a href="btn1page01.php" style="text-decoration:none;color:black;"><div><h3 style="text-align:center;margin:10px;">No </h3></div></a>
            </div>
        </div>
    
  </form>

</div>
</body>
<script>
function page002(current) {
        document.getElementById("frame-content").innerHTML = `<?php include "./admin_pages/btn1page002.php" ?>`;
        var a = document.getElementsByTagName('a')
        for (i = 0; i < a.length; i++) {
            a[i].classList.remove('active');
        }
        current.classList.add('active');
    }
</script>
</html>