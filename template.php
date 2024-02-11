<!doctype html>
<html>
<style>
    body {
        background-color: white;
        padding: 0;
        margin:0;       
        display:flex; 
    }

    .container {
       /* margin-top: 10px 15px;*/
        margin:0px;
        display: grid;
        grid-template-areas:
            'nav nav nav nav'
            'main-manu section section section ';
            
    }

    
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>

    <link rel='icon' href='<?=base_url('public/')?>Images/logo.jpg' />
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/')?>Css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/')?>Css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/')?>Css/content.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/')?>Css/footer.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/')?>Css/page.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/')?>Css/gallery.css" />


</head>


<body class="body" style="background-color: #E1F5FE;">

    <div class="container">
        <div class="row">


            <!----------- main area of web site --------------->

            <div class="col12 ">
                <!-- container-->

                <!------------------ Menu Bar ---------------------->

                <div class="rowlogo">
                    <div class="pageheader" style="width: 100%; overflow: auto;">

                        <div class="logo">
                            <img src="<?=base_url('public/')?>Images/trinaabhlogo.png">
                        </div>

                        <div class="heading">
                            <h1>Gallery</h1>
                        </div>
                    </div>
                </div>


                <div class="gallerybox">

                    <?php
                    if (count($result) > 0) {
                        foreach ($result as $key => $value) {
                            echo '<img id="myimg' . $value['id'] . '" class="myimg" src="' . $value["filename"] . '" alt="">';
                        }
                    } else {
                        echo "0 results";
                    }

                    ?>

                </div>
                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img01">

                    <!-- Modal Caption (Image Text) -->
                    <div id="caption"></div>
                </div>
                <!------------------- Footer ----------------------->
            </div>


        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        // Get the image and insert it inside the modal - use its "alt" text as a caption

        <?php
        foreach ($result as $key => $value) {
        ?>

            var img<?= $value['id'] ?> = document.getElementById("myimg<?= $value['id'] ?>");
            img<?= $value['id'] ?>.onclick = function() {
            modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
        <?php } ?>

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
    
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>