<?php 
  //Header
  include("components/Header.php");
 ?>
 
<!--include database file-->

<?php
  include('config.php');
      if(isset($_POST['submit']))
      {
      
       $name=$_POST['Name'];
       $email=$_POST['Email'];
       $msg=$_POST['Message'];
       
      // echo "$name $email $msg";
       
       $result="INSERT INTO `contact`( `Name`, `email`, `message`) VALUES('$name','$email','$msg')";
       if ($conn->query($result) === TRUE) {
   /* echo"<h3>New record created successfully</h3>";
    */
    
        
     
} else {
      echo "<h3>Error: " . $result . "<br>" . $conn->error."</h3>";
} 
 }

$conn->close();
    ?>
	
<!-- linking Javascript -->
<script type="text/javascript" src=""></script>

<!--linking css-->
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" type="text/css" href="CSS/contactus.css">

<html>

<head>
   <!--Page title-->
   <title>Contact Us</title>
   <style type="text/css">
body{
  
 
bg-blend-mode: overlay;
background-image: radial-gradient(50% 50% at top center,rgba(0,0,0,.70),#262626), url("https://images.unsplash.com/photo-1570102881689-c04ab4cf1f4c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmFsbG9vbnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");;
   

   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }

 </style>
</head>

<!--page body-->
<body>
  <center>
  <div id="main">
    <!--contact us Form -->
    <div class="container"  
        style="background-color: #f2f2f2; margin: 1rem; border-top-right-radius: 20px;
          border-top-left-radius: 20px; border-bottom-right-radius:20px; border-bottom-left-radius:20px; border-align:center;">

    <!-- header 1 -->
	
	<table class="tbl" border="0">
	<tr>
	<td  class="tbr1" width="20%">
	<center>
	<h2>To know more connect </h2>

	<h2>&#128386;Email</h2>
	<h4>Bibliotecal@gmail.com</h4><br>
	
	<h2>&#9742;Phone</h2>
	<h4>+94112091865</h4>
	<h4>+94775678262</h4>
	
	
	</center>
	
	
	
	</td>
	<td  class="tbr2" width="35%">
    <div class="jumbotro">
	
	
	
        <h1>CONTACT US</h1>
		<h3> We love to hear from you...</h3>
		
    </div>

    <!--Content-->
    <div class="modal-content">

      <!-- form Body-->
      <div class="modal-body mb-5 p-5">

     
		
	
		   <!--Form  -->
        <form method="post" action="Contact _us.php" style="box-sizing: border-box;" >

          <!--input name-->
          <div class="form-set">
            <input id="txtName" class="form-controls"  name="Name" placeholder="Enter Name" type="text" value="" required></input><br><br>
          </div>

          <!--input email-->
          <div class="form-set">
            <input id="txtAge" class="form-controls" name="Email" placeholder="Enter E-mail" type="email" value="" required></input><br><br>
          </div>
		  
         <!--input message-->
		 <div class="form-set">
            <textarea id="txtName" class="form-controls"  name="Message" placeholder="Enter Your Message" rows="4" cols="25" value=""></textarea><br>
         </div>

         <!--send msg-->
         <div class="form-set">
            <input id="btn" class=" btn btn-primary"  class="btn-lg" name="submit" type="Submit" value="Send Message" 
            style="height:45px; width:120px; font-size:14px;border-radius: 1rem; float:right;"><br><br>
            </input>
         </div>

      </div>  
     <!-- End Form  -->
     </form>
	 
	</td>
	</tr>
	</table>
	 
    <!-- End form Body-->
    </div>
    <!--End Content-->
  </div>
  
  <!--end container-->
  </div>    
<!--End main-->

</div>
</center>
</body>
  
</html>



 <?php 
//include footer
 include("components/Footer.php");
  ?>








