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
        <a href="index.php">🎨 Refesh</a>
        <a onclick="textAudio()" href="authentication/User/MemberLogin.php">🕮 Login Users </a>
        <a onclick="textToAudio()" href="authentication/Publisher/PublisherLogin.php">🕮 Login Publishers </a>
        <a href="Src/it21007910/newaboutus.php">🛈  About Us</a>
        <a href="Src/it20029586/Contact _us.php">👤 Contact</a>
        <a href="Src/it20029586/privacy policy.php">✅ Privacy</a>
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
<!--End Side nav bar-->


    <script type="text/javascript">
        /* FOR DEBUGGING PURPOSES */ 
        // openNav();


        
 
        function textToAudio() {
            let msg = document.getElementById("text-to-speech").value;
            
            let speech = new SpeechSynthesisUtterance();
            speech.lang = "en-US";
            
            speech.text = msg;
            speech.volume = 1;
            speech.rate = 1;
            speech.pitch = 1;
            
            window.speechSynthesis.speak(speech);
        }

        function myFunction() {
            alert('textToAudio()');
        }

        function textAudio() {
            let msg = document.getElementById("text-to-user").value;
            
            let speech = new SpeechSynthesisUtterance();
            speech.lang = "en-US";
            
            speech.text = msg;
            speech.volume = 1;
            speech.rate = 1;
            speech.pitch = 1;
            
            window.speechSynthesis.speak(speech);
        }

        function myFunction() {
            alert('textAudio()');
        }

    </script>