<?php 
	// include("Header.php");
$ftab="";

 // include database connection file
    include_once("config.php");
     /*-------------------------------------book----------------------------------------------*/
		$fsql = "SELECT ISBN, Book_Name, Cover_pic FROM book ORDER BY ISBN DESC ";
        $fpp = mysqli_query($conn, $fsql);

 
        // output data of each row if(isset($_POST['Request_ID']))
        if ($fpp->num_rows > 0) {
            while($rows = $fpp->fetch_assoc()) {
            	$image = $rows['Cover_pic'];    
                $ftab.=" <div style=' display: grid; grid-template-columns:auto auto auto  ;'>";
                $ftab.="<div class='card' style=' margin:3% 3% 3% 3%; padding: 3% 3% 3% 3%; '>";
                $ftab.="<div class='row'> <div class='column'>";
                $ftab.= "<center><img  class='apps'src=' $image' width='10%' height='5%'></center>";
                $ftab.= "<center><h2> <center>". $rows['Book_Name']."</h2></br></center>";
                $ftab.="<center><td><center><a href='details.php?ISBN=$rows[ISBN]'><button  class='btn btn-remove btns'> &#128308; Details</center> </div></div>";
                $ftab.="</div></div>";
				
            }
        }

 ?>

 <!DOCTYPE html>
 <html>
 <head>

<!-- linking Javascript -->
<script type="text/javascript" src="js/nac.js"></script> 

<!--Icon pack-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--linking css-->
<link rel="stylesheet" type="text/css" href="css/nav.css">
<link rel="stylesheet" type="text/css" href="css/request.css">
<link rel="stylesheet" href="AppSty/cate.css"/>
    <script src="AppJS/ctg.js"></script>
 	<meta charset="utf-8">
 	<title> </title>

 <style type="text/css">
 a{
    text-decoration:none;
    color:black;
    
    }

    body{
  
 
bg-blend-mode: overlay;
background-image: radial-gradient(50% 50% at top center,rgba(0,0,0,.70),#262626), url("https://images.unsplash.com/photo-1570102881689-c04ab4cf1f4c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmFsbG9vbnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");;
   

   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }

.nin{
    margin-left: 90%;

}

.viwe{

overflow-y:scroll;
overflow-wrap:300px ;
height:300px;
display:inline-grid;
width: 100%;

}
    
table{
width: 100%;
 align-items: center;
padding-right:3%;
}           
 @keyframes text{
    0%{
        color: inherit;
        margin-bottom: 40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: 40px;
    }
    85%{
        letter-spacing: 8px;
        margin-bottom: 40px;
    }
 }
 h2{
    margin-left:100%;
 }
 /* card */
 .card{

position: relative;
box-shadow: 20px 20px 50px rgba(0, 0, 0,0.5);
border-radius: 15px;
background: rgba(255, 255, 255, 1.0);
overflow: hidden;
justify-content: center;
align-items: center;
border-top: 1px solid rgba(255, 255, 255, 0.5);
border-left: 1px solid rgba(255, 255, 255, 0.5);
backdrop-filter: blur(5px); 
 }

 /* jambo 2 */
.jumbo{
border-radius:0px; border-top: 1px solid rgba(255, 255, 255, 0.5);
border-left: 1px solid rgba(255, 255, 255, 0.5); position: relative;
box-shadow: 20px 20px 50px rgba(0, 0, 0,0.5); 
}
 body{
  
 
bg-blend-mode: overlay;
background-image: radial-gradient(50% 50% at top center,rgba(0,0,0,.70),#262626), url("https://images.unsplash.com/photo-1570102881689-c04ab4cf1f4c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmFsbG9vbnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");;
   

   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }



.viwe{

overflow-y:scroll;
overflow-wrap:300px ;
height:300px;
display:inline-grid;
width: 100%;

}
    
table{
width: 100%;
 align-items: center;
padding-right:3%;
}           
 @keyframes text{
    0%{
        color: inherit;
        margin-bottom: 40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: 40px;
    }
    85%{
        letter-spacing: 8px;
        margin-bottom: 40px;
    }
 }
 /* card */
 .card{

position: relative;
box-shadow: 20px 20px 50px rgba(0, 0, 0,0.5);
border-radius: 15px;
background: rgba(255, 255, 255, 1.0);
overflow: hidden;
justify-content: center;
align-items: center;
border-top: 1px solid rgba(255, 255, 255, 0.5);
border-left: 1px solid rgba(255, 255, 255, 0.5);
backdrop-filter: blur(5px); 
 }

 /* jambo 2 */
.jumbo{
border-radius:0px; border-top: 1px solid rgba(255, 255, 255, 0.5);
border-left: 1px solid rgba(255, 255, 255, 0.5); position: relative;
box-shadow: 20px 20px 50px rgba(0, 0, 0,0.5); 
}
</style>
 </head>
 <body bgcolor="black">
<div style=" display: grid; grid-template-columns: auto auto auto auto auto auto ;">


	
 		<?php echo "$ftab" ?>
 </div>

</div>



 </body>

 </html>
 <?php 
//include footer
 require("./Footer.php")
  ?>