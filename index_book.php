<!--|||||||||||||||||||||||||||    --                                 |||||||||||||||||||||||||||               ||||||||||||||||||||||||| 
    --                       --    --  		          				  --                       --               -- 
    --                       --    --                                 --                       --               --
    --                       --    --                                 --                       --               --
    --                       --    --                                 --                       --               --    
    --                       --    --                                 --                       --               --
    --                       --    --                                 --                       --               --
    --                       --    --                                 --                       --               --||||||||||||||||||||||
    --                       --    --                                 -- ||||||||||||||||||||||||               --                  
    --                       --    --                                 --                       --               --             
    --                       --    --                                 --                       --               --           
    --                       --    --                                 --                       --               --  
    --                       --    --                                 --                       --               --
    --                       --    --                                 --                       --               --       
    --                       --    --                                 --                       --               --    
    |||||||||||||||||||||||||||    |||||||||||||||||||||||||||        |||||||||||||||||||||||||||               |||||||||||||||||||||||||-->  





<?php
include_once('dbConnection1.php');
if(isset($_POST['submit1']))

{
// username and password sent from form 
@$username=$_POST['username']; 
@$password=$_POST['seller_olbe_password']; //taking password of seller and put in variable


$sql="SELECT * FROM olbe_students_registration_table WHERE username='$username' and password='$password'";
$result4=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result4);

// If result matched $username and $password, table row must be 1 row
if($count==1){

@ $mem_id = $_POST['mem_id'];
$username = $_POST['username']; ;
$seller_olbe_password = $_POST['seller_olbe_password'];
$seller_book_code= $_POST['seller_book_code'];
@$seller_book_code_2= $_POST['seller_book_code_2'];

if(mysqli_query($con,"INSERT INTO olbe_seller_table  VALUES('$mem_id','$username','$seller_olbe_password','$seller_book_code','$seller_book_code_2')"))
{
	
$result= " book is accepted. u will get call from buyer in some days.. Thanks For USING OLBE :)";
}

}
else{
$result3="wrong email or password. no problem ;) sign up again or click on forget password. Its easy :)";
}
}
?>








<?php
include_once('dbConnection1.php');
if(isset($_POST['submit6']))

{
// username and password sent from form 
@$username=$_POST['username']; 
@$password=$_POST['password']; //taking password of seller and put in variable


$sql="SELECT * FROM olbe_students_registration_table WHERE username='$username' and password='$password'";
$result4=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result4);

// If result matched $username and $password, table row must be 1 row
if($count==1){

@ $mem_id = $_POST['mem_id'];
$username = $_POST['username']; ;
$password = $_POST['password'];
$another_book= $_POST['another_book'];


if(mysqli_query($con,"INSERT INTO olbe_seller_another_book  VALUES('$mem_id','$username','$password','$another_book')"))
{
	
$result= " book is accepted. your book will be put for advertisement in some days.. ";
}

}
else{
$result3="wrong email or password. no problem ;) sign up again or click on forget password. Its easy :)";
}
}
?>




<!--PHP FOR SIGN UP PAGE-->
<?php
include_once('dbConnection.php');

if(isset($_POST['submit']))

{
@ $mem_id = $_POST['mem_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$roll_no = $_POST['roll_no'];
$full_name= $_POST['full_name'];
$mob_number= $_POST['mob_number'];
$room_hostel= $_POST['room_hostel'];
$hostel_name=$_POST['hostel_name'];

 if(mysqli_query($con,"INSERT INTO olbe_students_registration_table VALUES('$mem_id','$username','$password','$roll_no','$full_name','$mob_number','$room_hostel','$hostel_name')"))
{
$result="Registration Successful";
echo "<script>
         $(window).load(function(){
             $('#myModal1').modal('show');
         });
    </script>";
}

}
?>
<!--FINISH 1st PHP-->




<!--PHP FOR Book Remove PAGE-->
<?php
include_once('dbConnection.php');

if(isset($_POST['submit2']))

{
@ $mem_id = $_POST['mem_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$branch = $_POST['branch'];
$book_code= $_POST['book_code'];


 if(mysqli_query($con,"INSERT INTO seller_book_advt_remove_table VALUES('$mem_id','$username','$password','$branch','$book_code')"))
{
$result6="Your email recieved(if password matched) ..we will remove ur Advertisment in few minutes.... :) thanks for using olbe";
}

}
?>
<!--FINISH 3rd PHP-->
































<?php
if(isset($_POST['submit5']))
{ 
 mysql_connect('localhost','olbein_olbe_user','Akashswapnil786') or die(mysql_error());
 mysql_select_db('olbein_olbe2') or die(mysql_error());
 $mail=$_POST['username'];
 $q=mysql_query("select * from olbe_students_registration_table where username='".$mail."' ") or die(mysql_error());
 $p=mysql_affected_rows();
 if($p!=0) 
 {
  $res=mysql_fetch_array($q);
  $to=$res['username'];
  $subject='Remind OLBE password';
  $message='Your password : '.$res['password']; 
  $headers='From:olbe.in';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
    echo'<font color="white">Password is sent..check Gmail :)</font>';
  }
  else
  {
   echo'<font color="white">mail is not send</font>';
  }
 }
 else
 {
  echo'<font color="white">You entered mail id is not present</font>';
 }
}
?>

















<!DOCTYPE HTML>
<html>

<!--head start-->
<head>
<title>Online Book Exchange</title>



<!--BOOTSTRAP ATTACH-->
<meta charset="utf-8">
<meta name="google-site-verification" content="v-cNVQIHqQzOP1lmw6a-2Y_H15J96pNHLvstanO46KU" />
<meta name="viewport" content="width=device-width, initial-scale=1"><!--final size not declared in mobile for zoom-->
<meta name="description" content="online book exchange." />
<meta name="keywords" content="online book exchange, olbe, olbe.in, sell book,knit,knit,ac.in, buy book, etc.">
<meta name="author" content="OLBE">
<meta name="robots" content="index, follow" />
<link rel="shortcut icon" href="image/b23.png">
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
<script src="js/jquery.min.js"  type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<meta name="google-signin-client_id" content="1042757804069-2nuuaabi7vcotcpvsdoigqqd8d3a3nd1.apps.googleusercontent.com">
<!--BOOTSTRAP FINISH-->


<!--MINE CSS -->
<link rel="stylesheet" type="text/css" href="css/bubblebook.css" />
<!--MINE CSS FINISH -->


<!--JAVASCRIPT FOR CHECK DETAILS FROM DATABASE-->
<script src="js/a.js" type="text/javascript"></script>
<!--JAVASCRIPT FINISH-->
<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<!--head closed-->













<!--body start-->
<body>


<!--<a href="mailto:akashsengar786@gmail.com?subject=Say Hello">contact</a>--> 



 <p style="color : white;">
 <?php if(isset($result6))echo $result6; ?>
 <?php if(isset($result5))echo $result5; ?>
 <?php if(isset($result3))echo $result3; ?>
 <?php if(isset($result))echo $username;?>&nbsp;&nbsp;&nbsp;&nbsp;
 <?php if(isset($result))echo $result;?>&nbsp;
 </p>

<!--NAVBAR -->



<nav class = "navbar navbar-custom" role = "navigation">
 <div class="container-fluid rock"> 
   <div class = "navbar-header">
      <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
      <div class="nav2"><a href="index.php">&nbsp;<img src="image/logo.png" title="OLBE Welcomes You"></a></div> 
     </div>
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
    <ul class="nav navbar-nav">
	</ul>
     <font style= ' font-size: 17px;  font-weight:bold; color: #767474;'>    
	 
	 <ul class = "nav navbar-nav navbar-right">  
	 
			 
		
		
		<li><a href="#" data-toggle="modal" data-target="#myModal1"  data-toggle="tooltip" data-placement="top" class="a1" title="Register"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;SIGN&nbsp;UP</a></li>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<li><a href="#" data-toggle="modal" data-target="#myModal3" class="a1" data-toggle="tooltip" data-placement="top" title="Sell Book"><span class="glyphicon glyphicon-shopping-cart  glyph" aria-hidden="true"></span>&nbsp;SELL</a></li>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<li><a href="#" data-toggle="modal" data-target="#mymodal5" class="a1" data-toggle="tooltip" data-placement="top" title="Our Services"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;SERVICES</a></li>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
      </ul></font>
	  	
   </div>
 </div>  
</nav>

<!--NAVBAR FINISH -->




<!--NAVBAR FINISH -->



















<div class="container" ><!--CIRCLE CONTAINER-->
<div class="row">
<div class="col-lg-6  circle"><!--FIRST 6 COLOUMNS -->

<div class="container">
	<div class="row destacados">
		<div class="col-md-3">
    		<div><a href="1_all.php" title="buy books" ><img src="image/newaa1.png" alt="Buy First Year Book" class="img-circle img-thumbnail" ></a></div>
		</div>
			
		<div class="col-md-3">
			<div><a href="#" title="buy books" data-toggle="modal" data-target="#myModal4"><img src="image/newaa2.png" alt="Buy Second Year Book" class="img-circle img-thumbnail" ></a></div>
		</div>		
	</div>
</div>



<div class="container">
	<div class="row destacados">
		<div class="col-md-3">
    		<div><a href="#" title="buy books" data-toggle="modal" data-target="#myModal7"><img src="image/newaa3.png" alt="Buy Third Year Book" class="img-circle img-thumbnail" ></a></div>
		</div>

		<div class="col-md-3">
			<div><a href="#" title="buy books" data-toggle="modal" data-target="#myModal_construction"><img src="image/newaa4.png" alt="Buy Final Year Book" class="img-circle img-thumbnail" ></a></div>
		</div>
    </div>
</div>

</div><!--FIRST 6 COLOUMNS FINISH-->



<div class="col-lg-6"><!--LAST 6 COLOUMNS --> 
<br>
<div class="row">
  <div class="col-lg-3">
  </div>
  <div class="col-lg-9">
    <img src="image/aw13.png" class="image"><!--LEFT IMAGE OF MAIN BODY-->
  </div>
</div>

</div><!--LAST 6 COLOUMNS FINISH-->
</div>
</div><!--CIRCLE CONTAINER FINISH-->














			
							
	


	
























<!--MODEL PART START -->  					
	


			
		





















					
		
<!-- MODAL SIGN IN PAGE-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <div class="modal-body">		   
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img height="40" width="40" src="image/cloud.png" alt="OLBE Sign In" align="center"><br> <br>
            <form class="form-inline" role="form" method="post" action="">
            
             <div class="form-group">
               <input class="inp"  required size="26" type="email" onBlur="checkAvailability3()" id="username1" name="username" placeholder="Enter email" >
               <br><span id="user-availability-status3"></span><br>
               <input class="inp" required type="password" name="password" placeholder="Password" size="13" >&nbsp;<input type="text"  name="roll_no" class="inp" required placeholder="Roll No" size="6" >
               <br><br>
               <input class="inp" required type="text" name="full_name" placeholder="Full Name" size="26" style='text-transform:uppercase'>
               <br><br>
               <input class="inp" required type="text" name="mob_number" placeholder="Mobile Number" size="26"  maxlength="10"  >
               <br><br> 
               <input class="inp"  required type="text" name="room_hostel" placeholder="Room" size="8"><!-- Single button -->
               <select name="hostel_name" class="inp">
                 <option>VS Hostel</option>
                 <option>New VS</option>
                 <option>Ramanujam</option>
                 <option>Khosla</option>
                 <option>New Raman</option>
                 <option>Aryabhatta</option>
                 <option>Gargi</option>
				 <option>Chaurasia</option>
                 <option>JP</option>
                 <option>Raghvendra</option>
				 <option>OTHER</option>
               </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <br><br>
	         </div>
             <p style="color : red;"><?php if(isset($error))echo $error; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" name="submit" class="button-link"   data-toggle="tooltip" title="Register"><B>OLBE&nbsp;Sign&nbsp;Up</B></button>
          </form>
      </div>
    </div>	
  </div>
</div>	
<!--MODEL SIGN IN PAGE FINISH-->	
	
	





	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
				
	

	
				
	
<!-- MODAL SIGN IN PAGE-->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <div class="modal-body">
		 <form class="form-inline" role="form" method="post" action="">
		   
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img height="40" width="40" src="image/cloud.png" alt="OLBE Sign In" align="center"><br> <br>
           <div class="form-group">
             <input name="username" required type="email" id="username" class="inp"  onBlur="checkAvailability()" placeholder="Registered email" size="26" >&nbsp;<img src="image/LoaderIcon.gif" id="loaderIcon" style="display:none" />
             <br>
             <span id="user-availability-status"></span>
             <br> 
             <input type="password" required class="inp" name="seller_olbe_password" id="seller_olbe_password" onBlur="checkAvailability1()" placeholder="Olbe Password" size="26">&nbsp;<img src="image/LoaderIcon.gif" class="loaderIcon1" style="display:none" />
             <br>
             <span id="user-availability-status1"></span>
             <br> 
             <input class="inp input1" required type="text" name="seller_book_code"  maxlength="6" placeholder="Book code 1"   size="9">&nbsp;&nbsp;<input class="inp input1" type="text" name="seller_book_code_2"  maxlength="6"  placeholder="Book code 2" size="9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <br><br>	
           </div>
           <p style="color : red;"><?php if(isset($error1))echo $error1; ?>
           &nbsp;&nbsp;&nbsp;<button type="submit" name="submit1" class="button-link" data-toggle="tooltip" title="welcome to OLBE" >&nbsp;Sell&nbsp;Book&nbsp;Now&nbsp;</button><br>
           &nbsp;&nbsp;&nbsp;<font style="font-family: ; font-size: 13px; color: #2b74a4;">click&nbsp;here&nbsp;to&nbsp;find&nbsp;</font><b><a href="#" data-toggle="modal" data-target="#myModal8"  data-toggle="tooltip" data-placement="top" title="Book Codes"><font style="font-family: ; font-size: 13px; color: red;">&nbsp;Book&nbsp;codes</font></a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <br>
		   &nbsp;&nbsp;&nbsp;<font style="font-family: ; font-size: 13px; color: #2b74a4;">forgot password ?</font>
		   <b><a href="#" data-toggle="modal" data-target="#myModal10"  data-toggle="tooltip" data-placement="top" title="forgot password"><font style="font-family: ; font-size: 13px; color: red;">&nbsp;click&nbsp;here</font></a></b>
		   
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;<font style="font-family: ; font-size: 13px; color: #2b74a4;">have another book ?</font>
		   <b>&nbsp;<a href="#" data-toggle="modal" data-target="#myModal_another_book"  data-toggle="tooltip" data-placement="top" title="Book code not Present"><font style="font-family: ; font-size: 13px; color: red;">click&nbsp;here</font></a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  </form>
          <a href="profile.php" title="Update Profile"><button type="submit" class="button-link2">update Profile</button></a>&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#myModal2"  data-toggle="tooltip" data-placement="top" title="forgot password"><button type="submit"class="button-link2" >remove book Advt.</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </div>	
  </div>
</div>	
<!--MODEL SIGN IN PAGE FINISH-->					
			

		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
					
<!-- MODEL SIGN UP 1 START --> 
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <div class="modal-body">


	      <form class="form-inline" role="form" method="post" action="">
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
           	        <img size="100%" src="image/cloud.png" alt="OLBE Sign In" align="center"><br> 
		   <br>
             <div class="form-group">
               <input class="inp"  required size="26" type="email"   
			   placeholder="Enter email" ><br><br>
               <input class="inp" required type="password" name="password" placeholder="Password" size="26"><br><br>
                
               <input class="inp input1"  required type="text" maxlength="6" name="book_code" placeholder="Book Code" size="10">&nbsp;
               <select name="branch" class="inp">
                 <option>&nbsp;&nbsp;branch&nbsp;&nbsp;</option>
                 <option>CSE</option>
                 <option>ME</option>
                 <option>EL</option>
                 <option>EE</option>
				 <option>CE</option>
               </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <br><br>
	         </div>
             <p style="color : Green;"><?php if(isset($result5))echo $result4; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" name="submit2" class="button-link"   data-toggle="tooltip" title="Register"><B>olbe&nbsp;will&nbsp;miss&nbsp;u</B></button>
          </form>
      </div>
    </div>	
  </div>
</div>							
					
					
	
	
	
	


					
					
					
	
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		

	
	
	
	
	
	
	
	
	
	
	

	
		
<!-- MODEL FOR SEARCH BOOKS-->
<div class="modal fade" class="model hide" data-backdrop="static" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-body"><p  style="font-weight:bold;  font-size:20px;  font-family:Segoe  Print;  color:#00B9F5;">Enter Book Codes for Search Books available in Olbe
	     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>    </p>
	   </div>
        
          
		  <div class="modal-body">
		  <div class="row">
		  <div class="col-md-3"></div>
		  <div class="col-md-3">
		
         <input type="text" class="inp input1" size="10px" name="seller_book_code" id="seller_book_code"  onBlur="checkAvailability2()" placeholder="Put code "  style='text-transform:uppercase' >&nbsp;<img src="image/LoaderIcon.gif" class="loaderIcon2" style="display:none" />
		<span id="user-availability-status2">
		</div>
        <div class="col-md-3">
          <input type="text" class="inp input1" size="10px" name="seller_book_code_2" id="seller_book_code_2"  onBlur="checkAvailability4()" placeholder="Put code"  style='text-transform:uppercase' >&nbsp;<img src="image/LoaderIcon.gif" class="loaderIcon2" style="display:none" />
         </span><span id="user-availability-status4"> </span> 			   
		</div>
		<div class="col-md-3">
		</div>
		
		

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-family: ; font-size: 13px; color: #2b74a4;">Find&nbsp;your</font><b><a href="#" data-toggle="modal" data-target="#myModal8"  data-toggle="tooltip" data-placement="top" title="Book Codes"><font style="font-family: ; font-size: 13px; color: red;">&nbsp;Book&nbsp;code</font></a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
or go by <a href="https://cse.google.com/cse/publicurl?cx=000237823519133508269:-sa7wvg1ytg">name search</a>
<br>

	   </div>
     </div>
    </div>	
  </div>
</div>										
<!--MODEL FOR SEARCH BOOKS FINISH -->					
			

			
			
		
	
	
	
	
	
	
	
	
	

	
	
	


























					
<!-- MODAL FOR CHOOSE 2 year BRANCH-->
<div class="modal fade " id="myModal8" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	   &nbsp;&nbsp;&nbsp;&nbsp;<img src="image/logo2.png">&nbsp;&nbsp;<b>SELECT YOUR YEAR</b><br><br>
<div class="row">
       <div class="col-sm-4">
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_2_1"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">2nd&nbsp;Year CS</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_2_2"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">2nd&nbsp;Year ME</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_2_3"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">2nd&nbsp;Year EL</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_2_4"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">2nd&nbsp;Year EE</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_2_5"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">2nd&nbsp;Year CE</button></a><br>

		</div>
        <div class="col-sm-4">
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_3_1"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">3rd Year CS</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_3_2"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">3rd Year ME</button></a><br>
	    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_3_3"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">3rd Year EL</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_3_4"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">3rd Year EE</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_3_5"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">3rd Year CE</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_1"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">First&nbsp;Year branches</button></a><br>	  
	    </div>
	   <div class="col-sm-4">       
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_4_1"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">4th Year CS</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_4_2"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">4th Year ME</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_4_3"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">4th Year EL</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_4_4"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">4th Year EE</button></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal8_4_5"  data-toggle="tooltip" data-placement="top" title="Register" ><button type="submit" class="button-link1">4th Year CE</button></a><br>
	   </div>
	   
	</div>	
  </div>
</div>	
</div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	

































				
<!-- MODAL FOR CHOOSE 8_1 year book code BRANCH-->
<div class="modal fade " id="myModal8_1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
 <div class="modal-content">  
       <div class="modal-body">
	   <img src="image/logo2.png"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	   	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Engineering Mathematics<br>By-Hk Das</td>
      <td>1EMHK</td>      
    </tr>
    <tr>
      <td>Engineering Mathematics-||<br>By-Hk Das</td>
      <td>1EMHK2</td>      
    </tr>
    <tr>
      <td>Engineering Machanics<br>By-SS bhavikatti</td>
      <td>1MESS</td>      
    </tr>
    <tr>
      <td>Engineering Physics<br>By-SK gupta</td>
      <td>1EMSR</td>      
    </tr>
    <tr>
      <td>Engineering Physics 2<br>By-Sk gupta</td>
      <td>1EPSK2</td>      
    </tr>
    <tr>
      <td> Let Us C<br>By-Yashvant kanetkar</td>
      <td>1CPYK</td>      
    </tr>
    <tr>
      <td>Computer Concepts<br>By-Blaguruswamy</td>
      <td>1CPBG</td>      
    </tr>
    <tr>
      <td>Engineering Chemistry<br>By-jain & jain</td>
      <td>1ECJJ</td>      
    </tr>
    <tr>
      <td> Electrical Engineering<br>By-Ashphaq husain</td>
      <td>1EEAH</td>      
    </tr>
    <tr>
      <td>Electrical Engineering<br>By- UA bakshi</td>
      <td>1EEUB</td>      
    </tr>
    <tr>
      <td>Envioroment & Ecology<br>By-Anubha & CP kausik</td>
      <td>1ENCP</td>      
    </tr>
    <tr>
      <td>Electronics Engineering<br>By-Sanjay sharma</td>
      <td>1ELSS</td>      
    </tr>
    <tr>
      <td>Engineering Physics<br>By-SK gupta</td>
      <td>1EPSK</td>      
    </tr>
    <tr>
      <td>Engineering Physics<br>By-Hk Das</td>
      <td>1EPS22</td>      
    </tr>
    <tr>
      <td>Manufacturing Process<br>By-Vikas upadhya</td>
      <td>1MPVU</td>      
    </tr>
    <tr>
      <td>  Professional Communication<br>By-Minakshi raman</td>
      <td>1PCMR</td>      
    </tr>
    <tr>
      <td>Electrical Engineering<br>by-JB gupta</td>
      <td>1EEJB</td>      
    </tr>
     <tr>
      <td>Electrical Engineering<br>by- JS katre</td>
      <td>1EEJS</td>      
    </tr>
     <tr>
      <td>Engineering Chemistry<br>by-SK singh</td>
      <td>1ECSK</td>      
    </tr>
     <tr>
      <td>Engineering Mechanics<br>by-DS kumar</td>
      <td>1EMDS</td>      
    </tr>
     <tr>
      <td>Manufacturing Process<br>by-UK singh</td>
      <td>1MPUK</td>      
    </tr>
     <tr>
      <td>Manufacturing Process<br>by-Arun mittal</td>
      <td>1MPAM</td>      
    </tr>
	   <tr>
      <td>Engineering Physics 2<br>by-SL gupta</td>
      <td>1EPSL</td>      
    </tr>
    
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	

	
	


	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
<!-- MODAL FOR CHOOSE 8_2_1 COMPUTER SCIENCE AND ENGINEERING year book code -->
<div class="modal fade " id="myModal8_2_1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Engineering Mathematics<br>By-Hk Das</td>
      <td>2EMHK</td>      
    </tr>
    <tr>
      <td>Engineering Mathematics<br>By-NP bali</td>
      <td>2EMNP</td>      
    </tr>
    <tr>
      <td>Data Structure<br>By-Baluja</td>
      <td>2DSBL</td>      
    </tr>
    <tr>
      <td> OOS Java<br>By-Lalit arora</td>
      <td>2OSLA</td>      
    </tr>
    <tr>
      <td>Data Structure <br>By-Sultania</td>
      <td>2DSSL</td>      
    </tr>
    <tr>
      <td>Automata<br>By-AK malviya</td>
      <td>2AMAM</td>      
    </tr>
    <tr>
      <td>Digital Electronics<br>By-P raja</td>
      <td>2DLPR</td>      
    </tr>
    <tr>
      <td>Discrete Mathematics<br>By-S chand, sarkar</td>
      <td>2DMSC</td>      
    </tr>
    <tr>
      <td>Computer Organisation<br>By-P raja</td>
      <td>2COPR</td>      
    </tr>
    <tr>
      <td>Computer Architechture<br>By-maris mano</td>
      <td>2COMM</td>      
    </tr>
    <tr>
      <td>Data Communication<br>By-Frouzan</td>
      <td>2DCFZ</td>      
    </tr>
    <tr>
      <td>DBMS<br>By-BC desai</td>
      <td>2DBBD</td>      
    </tr>
    <tr>
      <td>DBMS<br>By-Navathe</td>
      <td>2DBNV</td>      
    </tr>
    <tr>
      <td>OOS<br>By-Rambaugh</td>
      <td>2OSRB</td>      
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!-- MODAL FOR CHOOSE 8_2_2 Mechanical ENGINEERING year book code -->
<div class="modal fade " id="myModal8_2_2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Aplied Thermodynamics<br>By-P K nag</td>
      <td>2APPK</td>      
    </tr>
    <tr>
      <td>Hydraulics and Fluid<br>By-PN modi</td>
      <td>2HFPN</td>      
    </tr>
    <tr>
      <td>Fluid Mechanics<br>ByR K bansal</td>
      <td>2FMRK</td>      
    </tr>
    <tr>
      <td>SOM<br>By-S S ratan</td>
      <td>2SMSS</td>      
    </tr>
    <tr>
      <td>Thermodynamics<br>By-Dr. DS kumar</td>
      <td>2TDDS</td>      
    </tr>
    <tr>
      <td> Applied Thermodynamics<br>By-Onkar singh</td>
      <td>2ATOS</td>      
    </tr>
    <tr>
      <td>Manufacturing Science<br>By-Amitabha ghesho</td>
      <td>2MSAG</td>      
    </tr>
    <tr>
      <td> Theory of Machines<br>By-SS ratan</td>
      <td>2TMSS</td>      
    </tr>
    <tr>
      <td>Material Science<br>By-KM gupta</td>
      <td>2MSKM</td>      
    </tr>
    <tr>
      <td> Mechanics of Solid<br>By-Indrajeet</td>
      <td>2SMIJ</td>      
    </tr>
    <tr>
      <td> Engineeering Mathmatics<br>By-Hk Das</td>
      <td>2EMHK</td>      
    </tr>
    <tr>
      <td>SOM<br>By-RK rajput</td>
      <td>2SMRR</td>      
    </tr>
    
	
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	
<!-- MODAL FOR CHOOSE 8_2_3 ELECTRONICS ENGINEERING year book code -->
<div class="modal fade " id="myModal8_2_3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Engineering Mathematics<br>By-Hk Das</td>
      <td>2EMHK</td>      
    </tr>
    <tr>
      <td>Signals and System<br>By-allan V & S willsky</td>
      <td>2SSVS</td>      
    </tr>
    <tr>
      <td>Logic Design<br>By-P raja</td>
      <td>2DEPR</td>      
    </tr>
    <tr>
      <td> Electronic Circuit<br>By-Horenstien</td>
      <td>2ECMH</td>      
    </tr>
    <tr>
      <td>Solid State ED<br>By-Bez G</td>
      <td>2SSBE</td>      
    </tr>
    <tr>
      <td>Comp. Organisation<br>By-P raja</td>
      <td>2COPR</td>      
    </tr>
    <tr>
      <td>Electronic Instrument<br>By-AK sawhney</td>
      <td>2EIAK</td>      
    </tr>
   
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
<!-- MODAL FOR CHOOSE 8_2_4 ELECTRICAL ENGINEERING year book code -->
<div class="modal fade " id="myModal8_2_4" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Engineering Measurement<br>By-A k sawhney</td>
      <td>2EIAK</td>      
    </tr>
    <tr>
      <td>Thermal Hydraulics<br>By-Dr. d S kumar</td>
      <td>2THDS</td>      
    </tr>
    <tr>
      <td>Analog and Digital<br>By-P raja</td>
      <td>2ADPR</td>      
    </tr>
    <tr>
      <td>Basic System<br>By-U A bakshi</td>
      <td>2BSUA</td>      
    </tr>
    <tr>
      <td> Digital Design<br>By-M morris mano</td>
      <td>2DDMM</td>      
    </tr>
    <tr>
      <td>Signals and System<br>By-Alan V. & willsky</td>
      <td>2SSVS</td>      
    </tr>
    <tr>
      <td>Electrical Measurement<br>By-A K sawhney</td>
      <td>2EMAK</td>      
    </tr>
    <tr>
      <td>Analysis of basic Sys<br>By-Sarav mari tripathi</td>
      <td>2ABSM</td>      
    </tr>
    <tr>
      <td>Electrical Machinery<br>By-Dr. P S bimbhar</td>
      <td>2EMPS</td>      
    </tr>
    <tr>
      <td>Microprocessor<br>By-A K shwaney</td>
      <td>2MPRS</td>      
    </tr>
    <tr>
      <td>Microprocessor<br>By-Ramesh goankar</td>
      <td>2MPRG</td>      
    </tr>
    <tr>
      <td>Electrical Terminology<br>By-Theraja</td>
      <td>2ETTH</td>      
    </tr>
    <tr>
      <td>Electromagnatic Feild<br>By-U A bkshi</td>
      <td>2EFUA</td>      
    </tr>
    <tr>
      <td>Principal Electromagnatic<br>By-Sadiko</td>
      <td>2PESK</td>      
    </tr>
    <tr>
      <td>Circuit Theory<br>By-A chakrabati</td>
      <td>2CTAC</td>      
    </tr>
    <tr>
      <td>Engineering Material<br>By-R K rajput</td>
      <td>2ESRK</td>      
    </tr>
    <tr>
      <td>EEE Materials<br>By-J B gupta</td>
      <td>2EEJB</td>      
    </tr>   
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
						
					
<!-- MODAL FOR CHOOSE 8_2_5 CIVIL ENGINEERING book code BRANCH-->
<div class="modal fade " id="myModal8_2_5" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	    <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Strength of Material<br>By-Ashok</td>
      <td>2SOMA</td>      
    </tr>
    <tr>
      <td>Structural Analysis<br>By-Gs pandit</td>
      <td>2SAGS</td>      
    </tr>
    <tr>
      <td>Flow in OC<br>By-K subramaniya</td>
      <td>2OCKS</td>      
    </tr>
    <tr>
      <td> Geology Engineering<br>By-praveln singh</td>
      <td>2EGPS</td>      
    </tr>
    <tr>
      <td>Structural Analysis<br>By-Indrajeet</td>
      <td>2SAIJ</td>      
    </tr>
    <tr>
      <td>Highway Engineering<br>By-jasto</td>
      <td>2HESK</td>      
    </tr>
    <tr>
      <td>Fluid Mechanics<br>By-Indrajeet</td>
      <td>2FMIJ</td>      
    </tr>
    <tr>
      <td>Fluid Mechanics<br>By-R K bansal</td>
      <td>2FMRK</td>      
    </tr>
    <tr>
      <td>Survaying<br>By-B C punmia</td>
      <td>2SRBC</td>      
    </tr>
    <tr>
      <td>Engineering Mathmatics<br>By-Hk Das</td>
      <td>2EMHK</td>      
    </tr>
    <tr>
      <td>BMC<br>By-Sh. islam</td>
      <td>2BMSI</td>      
    </tr>
    <tr>
      <td> Mechanics of Solid<br>By-R k bansal</td>
      <td>2SMRB</td>      
    </tr>
    <tr>
      <td>SOM<br>By-R k rajput</td>
      <td>2SMRR</td>      
    </tr>
    <tr>
      <td>BMC<br>By-Sanjeev</td>
      <td>2BMSS</td>      
    </tr>
    
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>

</table>
</div>
</div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	
<!-- MODAL FOR CHOOSE 8_3_1 COMPUTER SCIENCE AND ENGINEERING year book code -->
<div class="modal fade " id="myModal8_3_1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>DAA<br>By-Coreman</td>
      <td>3DACO</td>      
    </tr>
    <tr>
      <td>OS<br>By-Galvin</td>
      <td>3OSGA</td>      
    </tr>
    <tr>
      <td>Software Engineering<br>By-Pressman</td>
      <td>3SEPR</td>      
    </tr>
    <tr>
      <td>CA<br>By-Kai</td>
      <td>3CAKA</td>      
    </tr>
    
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	
<!-- MODAL FOR CHOOSE 8_3_2 MECHANICAL ENGINEERING year book code -->
<div class="modal fade " id="myModal8_3_2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Heat & Mass Transfer <br>By-P K nag</td>
      <td>3HMPK</td>      
    </tr>
    <tr>
      <td>IC Engine<br>By-V ganeshan</td>
      <td>3ICVG</td>      
    </tr>
    <tr>
      <td>TOM<br>By-Ratan</td>
      <td>3TMRT</td>      
    </tr>
    <tr>
      <td>TOM<br>By-thomas bevan</td>
      <td>3TMTH</td>      
    </tr>
    <tr>
      <td>Manufacturing Process<br>By-P N rao</td>
      <td>3MPPN</td>      
    </tr>
    <tr>
      <td>Manufacturing Process<br>By-K M moed</td>
      <td>3MPKM</td>      
    </tr>
    <tr>
      <td>Machine Design <br>By-V  bhandari</td>
      <td>3MDVB</td>      
    </tr>
    <tr>
      <td>Heat &mass Transfer<br>By-Hk Das</td>
      <td>3HMCE</td>      
    </tr>
   
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	
<!-- MODAL FOR CHOOSE 8_3_3 ELECTRONIC ENGINEERING year book code -->
<div class="modal fade " id="myModal8_3_3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Intregated Circuit<br>By-Sedra smith</td>
      <td>3ICSS</td>      
    </tr>
    <tr>
      <td>Antena & wave<br>By-J d kraush</td>
      <td>3ANJD</td>      
    </tr>
    <tr>
      <td>Comunication<br>By-Taub & shelling</td>
      <td>3PCTS</td>      
    </tr>
    <tr>
      <td>Microprocessor<br>By-Gonkar</td>
      <td>3MPGO</td>      
    </tr>
   
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	
<!-- MODAL FOR CHOOSE 8_3_4 ELECTRICAL ENGINEERING year book code -->
<div class="modal fade " id="myModal8_3_4" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Elec. Machinery 2 <br>By-p s bimbhra</td>
      <td>3EMPS</td>      
    </tr>
    <tr>
      <td> Control System<br>By-k r verman</td>
      <td>3CSKR</td>      
    </tr>
    <tr>
      <td>Control System<br>By-I J nagraj</td>
      <td>3CSIJ</td>      
    </tr>
    <tr>
      <td>Power System<br>By-C L wadhwa</td>
      <td>3PSCL</td>      
    </tr>
    <tr>
      <td>Power System<br>By-V K mehta</td>
      <td>3PSVK</td>      
    </tr>
    <tr>
      <td>Communication Eng.<br>By-Sanjay sharma</td>
      <td>3CESS</td>      
    </tr>
    
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	
<!-- MODAL FOR CHOOSE 8_3_5 CIVIL ENGINEERING year book code -->
<div class="modal fade " id="myModal8_3_5" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Geotechnical Engineering<br>By-b c punnmia</td>
      <td>2GEBC</td>      
    </tr>
    <tr>
      <td>Enviourment Engineering<br>By-s k garg</td>
      <td>3EESK</td>      
    </tr>
    <tr>
      <td>DOCS-1<br>By-s b suman</td>
      <td>3DCSB</td>      
    </tr>
    <tr>
      <td>Structural Analysis<br>By-ramanutham </td>
      <td>3SARM</td>      
    </tr>
    <tr>
      <td>EME<br>By-ranjan </td>
      <td>3EMTM</td>      
    </tr>
    <tr>
      <td>Enviourment Eng- ||<br>By-s k garg</td>
      <td>3EMSK2</td>      
    </tr>
    <tr>
      <td> DOCS- ||<br>By- s b suman</td>
      <td>3DCSB2</td>      
    </tr>
    <tr>
      <td>Industrial Management<br>By-j sangal</td>
      <td>3IMJS</td>      
    </tr>
    <tr>
      <td>Engineering Hydrology<br>By-K subramaniam</td>
      <td>3EHKS</td>      
    </tr>
   
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!-- MODAL FOR CHOOSE 8_2_1 cCOMPUTER SCIENCE AND ENGINEERING year book code -->
<div class="modal fade " id="myModal8_2_1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	
	
	

  <div id="table-scroll">	
<table>

  <thead>
    <tr>
      <th>Book Name</th>
      <th>Book Code</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
    <tr>
      <td><br>By-Hk Das</td>
      <td></td>      
    </tr>
	
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" align="center">&copy OLBE pvt ltd.</th>
     
    </tr>
  </tfoot>
</table>

	
   </div>		
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!-- Large modal 5 -->

<div class="modal fade" id="mymodal5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  ">
    <div class="modal-content  ">
     <div class="modal-body">
	 
	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
<center><a  href="index.php"><img src="image/cloud.png"></a></center>
	<!--First Para-->
      <p style="font-family: ; font-weight:bold; font-size: 26px; color: #2b74a4; text-shadow: 4px 4px 2px rgba(230, 230, 230, 1);">
	  What’s in store for you!</p>
	  <font style="font-weight:bold; font-size: 16px; color:#00B9F5;">
	  Well, you may think this is just another website. </font>
	  <font style="font-weight:bold; font-size: 16px; color: #000;">
	  I don’t really feel like making an account over here. These guys would perhaps spam my inbox! Lol, no we wont!
	  To know what’s in store for you? Just read on! <br><br>
      </font>
	  	  
<!--Second Para-->	  
      <p style="font-size: 26px; color: #2b74a4; text-shadow: 4px 4px 2px rgba(230, 230, 230, 1);font-weight:bold;">
	  Students</p>
	  <p style="font-weight:bold; font-size: 16px; color: #000;">
	 You have passed your semester ! and you need books again.You rush to local old books dealer who will charge you 70% for old Books and then return the same book at 25% price even if you want it for two days.</p>
      <p style="font-weight:bold; font-size: 16px; color:#000; ">We know how devastating can that be! Been there, done that!</p>
      <p style="font-weight:bold; font-size: 16px; color:#000; ">Switch to <font style=" font-size: 16px; color:orange;">olbe.in!</font> Search the book in your neighbourhood collegemate, buy/sell/exchange it at cheaper price and in future you can even sell it here at a better prices!</p>

<!--Third Para-->
      <p style="  font-size: 26px; color: #2b74a4; text-shadow: 4px 4px 2px rgba(230, 230, 230, 1);font-weight:bold;">
	  Reading Enthusiasts</p>
      <p style="font-weight:bold; font-size: 16px; color: #000; ">
      I know most of you guys will kill me if I tell you to sell your books. No, don’t sell them!</p>
      <p style="font-weight:bold; font-size: 16px; color:#000; ">Umm…But you can surely think of exchanging them for next semester!</p>
      <p style=" font-size: 16px; color:#000; font-weight:bold;">Or perhaps look in the neighbourhood collegemate, someone might be selling his collection off and you too could strike a deal!</p><br>

<!--Fourth Para-->
      <p style="font-family: ; font-size: 15px; font-weight:bold; color: green; text-shadow: 4px 4px 2px rgba(230, 230, 230, 1);">
      If you don’t belong to any of the categories above and still think that it’s pretty much a great website ;) No Problem! Click Here and submit your <a class="mail"href="mailto:olbe2016@gmail.com?subject=Choose For Us-- 1_Good; 2_Better; 3_Best">feedback!</a> 
</p>
	  
	  </div>
    </div>
  </div>
</div>	
	
<!-- Large modal 5 FINISH-->	
	
	

	
	
	



	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	







	












	
	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			





			
			
			
			
			
			
			
			
			
			
				
					
					
<!-- MODAL FOR CHOOSE 2 year BRANCH-->
<div class="modal fade " id="myModal4" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	   &nbsp;&nbsp;&nbsp;&nbsp;<b>CHOOSE BRANCH</b><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="2_cs.php"><button type="submit" class="btn btn-primary btn3d">Computer Science & Engineering</button></a><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="2_me.php"><button type="submit" class="btn btn-primary btn3d">Mechanichal Engineering</button></a><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="2_el.php"><button type="submit" class="btn btn-primary btn3d">Electronics Engineering</button></a><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="2_ee.php"><button type="submit" class="btn btn-primary btn3d">Electrical Engineering</button></a><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="2_ce.php"><button type="submit" class="btn btn-primary btn3d">Civil Engineering</button></a><br><br>   
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	



<!-- MODAL FOR CHOOSE 3 year BRANCH-->
<div class="modal fade " id="myModal7" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
   <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>&nbsp;      
	   &nbsp;&nbsp;&nbsp;&nbsp;<b>CHOOSE BRANCH</b><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="3_cs.php"><button type="submit" class="btn btn-primary btn3d">Computer Science & Engineering</button></a><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="3_me.php"><button type="submit" class="btn btn-primary btn3d">Mechanichal Engineering</button></a><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="3_el.php"><button type="submit" class="btn btn-primary btn3d">Electronics Engineering</button></a><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="3_ee.php"><button type="submit" class="btn btn-primary btn3d">Electrical Engineering</button></a><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="3_ce.php"><button type="submit" class="btn btn-primary btn3d">Civil Engineering</button></a>
     </div> 
	</div>	
  </div>
</div>							
<!--MODEL FOR CHOOSE BRANCH FINISH-->	

	
	
 	
  
<!-- MODAL FOR forgot password-->
<div class="modal fade " id="myModal10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
   <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>  
	
   <p style="font-family: ; font-weight:bold; font-size: 26px; color: #2b74a4; text-shadow: 4px 4px 2px rgba(230, 230, 230, 1);">Forgot Password</font>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email id:</td><td><input type='text' name='username'/></td></tr>
<tr><td><input type='submit' name='submit5' value='Submit'/></td></tr>
</table>
</form>



     </div>
	</div>	
  </div>
</div>


	
	
	
		
	
 	
  
<!-- MODAL FOR forgot password-->
<div class="modal fade " id="myModal_construction" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
   <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>  
	
   <p style="font-family: ; font-weight:bold; font-size: 20px; color: ORANGE; text-shadow: 4px 4px 2px rgba(230, 230, 230, 1);"> SORRY</font>
  <p style="font-family: ; font-weight:bold; font-size: 20px; color: GREEN; text-shadow: 4px 4px 2px rgba(230, 230, 230, 1);"> Data will be available soon.</font>



     </div>
	</div>	
  </div>
</div>

	













<!-- MODAL SIGN UP PAGE-->
<div class="modal fade" id="myModal_another_book" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <div class="modal-body">
		 <form class="form-inline" role="form" method="post" action="">
		   
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img height="40" width="40" src="image/cloud.png" alt="OLBE Sign In" align="center"><br> <br>
           <div class="form-group">
              <input type="text" required class="inp" name="username"  placeholder="Email" size="26"><br><br>
			  <input type="password" required class="inp" name="password"  placeholder="Password" size="26"><br><br>
             <input type="text" required class="inp" name="another_book"  placeholder="Your Book name" size="26">
           </div><br><br><br>
           <button type="submit" name="submit6" class="button-link" data-toggle="tooltip" title="welcome to OLBE" >&nbsp;Sell&nbsp;new&nbsp;Book&nbsp;</button><br>
          </form>
      </div>
    </div>	
  </div>
</div>	
<!--MODEL SIGN IN PAGE FINISH-->		




	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	


	
	
	
	

	
	
	
	
<!--Time Delay	
	
  <script type="text/javascript">
$(document).ready(function() {
    $("body").css("display", "none");
    $("body").fadeIn(2000);
    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(1000, redirectPage);      
    });  
    function redirectPage() {
        window.location = linkLocation;
    }
});
</script> 	
-->
		
	
	
	
	
	
	
<!--scripting of check avaibility-->
<script>
function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'username='+$("#username").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
</script>
<!--finish-->




	
<!--scripting of check avaibility-->
<script>
function checkAvailability1() {
	$(".loaderIcon1").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'seller_olbe_password='+$("#seller_olbe_password").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status1").html(data);
		$(".loaderIcon1").hide();
	},
	error:function (){}
	});
}
</script>
<!--finish-->



	
<!--scripting of check avaibility-->
<script>
function checkAvailability2() {
	$(".loaderIcon2").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'seller_book_code='+$("#seller_book_code").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status2").html(data);
		$(".loaderIcon2").hide();
	},
	error:function (){}
	});
}
</script>
<!--finish-->




<!--scripting of check avaibility-->
<script>
function checkAvailability4() {
	$(".loaderIcon2").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'seller_book_code_2='+$("#seller_book_code_2").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status4").html(data);
		$(".loaderIcon2").hide();
	},
	error:function (){}
	});
}
</script>
<!--finish-->




	
<!--scripting of check avaibility-->
<script>
function checkAvailability3() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'username='+$("#username1").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status3").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
</script>
<!--finish-->




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74604759-1', 'auto');
  ga('send', 'pageview');

</script>



			
</body>
<!--body closed-->

</html>

