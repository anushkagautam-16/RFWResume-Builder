<?php include 'dashboard1.php';?>


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

    .item ul li {
        float: left;
        color: white;
        margin-left: 20px;
        list-style: none;

    }

    /*========================================= nav-bar =========================================*/
    #nav {
        grid-area: nav;
        height: 30px;
        background-color: #1d2327;
    }

    #nav ul {
        float: left;

    }

    /*================================= main-manu ======================= */
    #main-manu {
        background-color: #1d2327;
        grid-area: main-manu;
        width: 15rem;
        height: 40rem;
        padding-top: 5px;
        text-align: center;
       
    }

    .das a {
        text-decoration: none;
        color: white;
        font-size: 1.5rem;
        padding-left: 30px;
    }

    .das ul li {
        display: block;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        /* margin-left: 30px;
    margin-top: 25px; */
    }

    .das ul li samp img {
        width: 30px;
        height: 30px;
        padding-left: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .das ul li:hover {
        color: aqua;
        /* background-color: aqua; */
        display: block;
        border-left: 5px solid aqua;

    }

    /*=========================== dashboard ===============================*/
    #section {
        /* border: 2px solid red; */
        grid-area: section;
        width: 81rem;
    }

    /* ======================================section ==============================*/

    .item .media {
        margin: 10px;

    }

    .imgs {
        border: 2px solid black;
        width: 100%;
        height: 600px;
        margin-top:10px;
    }

    .imgs img {
        width: 10em;
        height: 10em;
        margin: 5px;
    }
</style>




<?php
//session_start();
//error_reporting(0);

if (isset($_POST['post_galimg'])) {
    include "partial/_dbConnection.php";
    $gal_text = $_POST['gal_text'];

    $gal_img_file_name = $_FILES['galimg']['name'];
    $tempgalimgname = $_FILES['galimg']['tmp_name'];
    $galimgfolderloc = "./img/" . $gal_img_file_name;

    if ((move_uploaded_file($tempgalimgname, $galimgfolderloc))) {
        $insert_gal_q = "insert into gallery_db (image,text)values( '$galimgfolderloc','$gal_text')";
        $postednews = mysqli_query($conn, $insert_gal_q);
    }
}
?>

<!-- =======================================section=========================================== -->
<div class="container" >

    <!-- =======================================section=========================================== -->
    <div class="item" id="section">
        <div class="media">
            <h1>Media Library</h1>
            <form method="post" action="dashboard1.php" name="post_galimg" enctype="multipart/form-data">
                <label for="">Gallery text (optuinal)</label>
                <input type="text" name="gal_text"><br><br>
                <label>Upload Gallery image<input type="file" name="galimg" accept="image/*"></label><br><br>
                <button type="submit" name="post_galimg">Post Gallery</button>
            </form>
            <!---------------- function ------------------------>
            <div class="imgs">

                <?php
                include "partial/_dbConnection.php";

                $sql = "select * from gallery_db order by timestamp desc, id desc";
                $result = mysqli_query($conn, $sql);
                //$chkresult = mysqli_num_rows($result);
                
                if (mysqli_num_rows($result) > 0)
                {

                    while (($row = mysqli_fetch_assoc($result))) 
                    {
                        $gal_img = $row['image'];
                        $gal_text = $row['text'];
                        $time_stamp = $row['timestamp'];
                        echo '<img src="' . $gal_img . '" alt="">';

                    }
                } ?>

            </div>


        </div>
    </div>
</div>
