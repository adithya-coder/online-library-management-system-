<!--Side nav bar-->
<div  id="mySidenav" class="sidenav" style=" background: rgba(255,255,255,0.1);
    box-shadow:0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    backdrop-filter: blur(25px);">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!--menu header-->
    <a class="gest" color="white"><i class="fa fa-user-circle fa-2x" style="text-decoration: none; " area-hidden="true" >&nbsp;</i>Hello, Sign in <?php /* echo "$username";*/ ?></a><br> 
    <div style="margin-left: 0rem; word-spacing: 1px; font-size: 1rem; font-family: 'Varela Round'; font-weight: bold;">

        <!--menu-->
        <a href="index.php">🏠 Home</a>
        <a onclick="textAudio()" href="authentication/User/MemberLogin.php">🕮 Login Users </a>
        <a onclick="textToAudio()" href="authentication/Publisher/PublisherLogin.php">🕮 Login Publishers </a>
        <a href="newaboutus.php">🛈  About Us</a>
        <a href="contactus.php">👤 Contact Us</a>
        <a href="privacypolicy.php">✅ Privacy Policy</a>
        <?php
            if(isset($_SESSION['logged_user'])) {
                echo '<a href="functionalities/logout.php">Logout</a>';
            }
        ?>

        <div class="empty-space" style="height: 15vh;"></div>

        <a href="#">Feedback</a>
        <a href="#">Rate Us</a>

        <div class="rating">
            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
        </div>
         
    </div>
</div>

<script type="text/javascript" src="JS/n.js"></script> 
<!--End Side nav bar-->