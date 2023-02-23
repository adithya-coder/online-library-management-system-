<?php 
    session_start();
    
    include("components/Header.php");
    $ftab="";

    require_once("config.php"); // include database connection

    /* get books one-by-one */
    
    $fsql = "SELECT ISBN, Book_Name, Cover_pic FROM book ORDER BY ISBN DESC ";
    $fpp = mysqli_query($conn, $fsql);

    while($rows = $fpp->fetch_assoc()) {
            
        $image = $rows['Cover_pic'];

        $ftab .="<div class='card' style='margin:3%; padding: 3%; background: rgba(255,255,255,0.1);
                box-shadow:0 25px 45px rgba(0,0,0,0.1);
                border: 1px solid rgba(255,255,255,0.5);
                border-right: 1px solid rgba(255,255,255,0.2);
                border-bottom: 1px solid rgba(255,255,255,0.2);
                backdrop-filter: blur(25px);'>";

            $ftab .= "<center><img class='apps' src='Src/it20029586/image/$image'></center> <br>";

            $ftab .= "<center><h2> ". $rows['Book_Name']."</h2></center> <br>";

            $ftab .="<center><a href='Src/it20072810/details.php?ISBN=$rows[ISBN]'><button  class='btn btn-remove btns details-btn'> &#128308; Details</button></a></center>";

        $ftab .= "</div>";
    }

 ?>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
        <meta charset="utf-8">

        <!-- dashboard css file -->
        <link rel="stylesheet" type="text/css" href="CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="CSS/cate.css" />
        <link rel="stylesheet" type="text/css" href="CSS/dashboard.css">

        <title>Dashboard</title>
    </head>

    <body background-color="black">
        
        <div id="main">
            <div style='display: grid; grid-template-columns: repeat(3, 3fr); width: 100%;'>
                <?php echo $ftab; ?>
            </div>
        </div>

        <!-- Footer component -->
        <?php include("components/Footer.php"); ?>

        <!-- JS files -->
        <script type="text/javascript" src="Src/it21068546/js/nac.js"></script> 
        <script src="AppJS/ctg.js"></script>

    </body>
</html>
