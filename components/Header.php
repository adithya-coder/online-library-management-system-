<?php   //get login details
    session_start();
    if(isset($_SESSION['logged_user'])) {
        $username= $_SESSION['logged_user'] ;
    }

 ?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- linking Javascript -->
    <script type="text/javascript" src="JS/nav.js"></script>  
    <!--Icon pack-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--linking css-->
    <link rel="stylesheet" type="text/css" href="CSS/nav.css">

</head>
<!--header-->

    <?php include('SideNavBar.php') ?>
    
</div>


<?php include('components/TopNavBar.php') ?>

<!--nav bar  menu countrol and navigation-->
<div class="topnav1" style=" background: rgba(255,255,255,0.1);
    box-shadow:0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    backdrop-filter: blur(25px);
    width: auto;">
    <!--side nav bar open  l-->
    <span style="color:grey;padding-left:1rem; font-style: unset;    font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open</span>
    <!--navigation-->
<!--End nav bar  menu countrol and navigation-->
</div>

<?php include('components/SecondaryNavBar.php'); ?>