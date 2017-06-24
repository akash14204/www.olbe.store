
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
$result6="Your email recieved ..we will remove ur Advertisment in few minutes.... :) thanks for using olbe";
}


}
?>
<!--FINISH 3rd PHP-->







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
$result3="Wrong email or password";
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
}

}
?>
<!--FINISH 1st PHP-->













<html>



<head>
<title>Online Book Exchange</title><!--title close-->



<!--BOOTSTRAP ATTACH-->
<meta charset="utf-8"><link rel="shortcut icon" href="image/logo2.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
<script src="js/jquery.min.js"  type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<!--BOOTSTRAP finish-->


<!--MINE CSS -->
<link rel="stylesheet" type="text/css" href="css/book.css" />
<!--MINE CSS FINISH -->


<!--JAVASCRIPT FOR CHECK DETAILS FROM DATABASE-->
<script src="js/a.js" type="text/javascript"></script>
<!--JAVASCRIPT FINISH-->


</head>





















<body> 



 <p style="color : white;"> <?php if(isset($result6))echo $result6; ?><?php if(isset($result3))echo $result3; ?><?php if(isset($result))echo $username;?>&nbsp;&nbsp;&nbsp;&nbsp;<?php if(isset($result))echo $result;?>&nbsp;<?php if(isset($error))echo $error; ?><?php if(isset($error1))echo $error1; ?></p>
 
 


<!--COLLASPE MOBILE NAVBAR START-->

<nav class="navbar navbar-transparent">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="nav2"><a href="index.php"><img src="image/logo.png"></a></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search">
          <a href="3_cs.php#footer"><span class="glyphicon glyphicon-search  glyph" aria-hidden="true"></a>
        </form>        
      </ul>
    </div>
  </div>
</nav>


<!--MOBILE NAVBAER FINISH-->


















<!--MAIN BODY PART-->
<div class="container">
   <div class="row">
	  <div class="col-lg-3">
		 <div class="block">
             <div class="col-item">
                  <div class="photo">
                     <a href="index.html" title="click to download PDF"> <img src="image/3cs/1.jpg"  alt="download PDF" /></a>
                  </div>
                  <div class="info">
                   DAA 
				   <h5 class="price-text-color">&#8377;&nbsp;400&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Code:&nbsp;3DACO</h5>
                   <div class="separator clear-left">
                   <p class="btn-add">
                   <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;<a href="seller_page.php?book_id=3DACO">Buy Book</a></p>
                   <p class="btn-details">
                   <span class="glyphicon glyphicon-flag"></span>&nbsp;<a href="#" data-toggle="modal" data-target="#myModal3"  data-toggle="tooltip" data-placement="top" title="sell BOOK" >Sell Book</a></p>
                   </div>
                   <div class="clearfix">
                   </div>				   
                  </div>
              </div>
           </div>
	   </div>
					
	  <div class="col-lg-3">
		 <div class="block">
             <div class="col-item">
                  <div class="photo">
                     <a href="index.html" class="hovertext" title="click to download PDF"> <img src="image/3cs/2.jpg" class="img-responsive" alt="download PDF" /></a>
                  </div>
                  <div class="info">
                   OS
				   <h5 class="price-text-color">&#8377;&nbsp;250&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Code:&nbsp;3OSGA</h5>
                   <div class="separator clear-left">
                   <p class="btn-add">
                   <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;<a href="seller_page.php?book_id=3OSGA" >Buy Book</a></p>
                   <p class="btn-details">
                   <span class="glyphicon glyphicon-flag"></span>&nbsp;<a href="#" data-toggle="modal" data-target="#myModal3"  data-toggle="tooltip" data-placement="top" title="sell BOOK" >Sell Book</a></p>
                   </div>
                   <div class="clearfix">
                   </div>				   
                  </div>
              </div>
           </div>
	   </div>
					
	  <div class="col-lg-3">
		 <div class="block">
             <div class="col-item">
                  <div class="photo">
                     <a href="index.html" class="hovertext" title="click to download PDF"> <img src="image/3cs/3.jpg" class="img-responsive" alt="download PDF" /></a>
                  </div>
                  <div class="info">
                   Software Engineering
				   <h5 class="price-text-color">&#8377;&nbsp;300&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Code:&nbsp;3SEPR</h5>
                   <div class="separator clear-left">
                   <p class="btn-add">
                   <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;<a href="seller_page.php?book_id=13SEPR" >Buy Book</a></p>
                   <p class="btn-details">
                   <span class="glyphicon glyphicon-flag"></span>&nbsp;<a href="#" data-toggle="modal" data-target="#myModal3"  data-toggle="tooltip" data-placement="top" title="sell BOOK" >Sell Book</a></p>
                   </div>
                   <div class="clearfix">
                   </div>				   
                  </div>
              </div>
           </div>
	   </div>
					
	  <div class="col-lg-3">
		 <div class="block">
             <div class="col-item">
                  <div class="photo">
                     <a href="index.html" class="hovertext" title="click to download PDF"> <img src="image/3cs/4.jpg" class="img-responsive" alt="download PDF" /></a>
                  </div>
                  <div class="info">
                   CA
				   <h5 class="price-text-color">&#8377;&nbsp;300&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Code:&nbsp;3CAKA</h5>
                   <div class="separator clear-left">
                   <p class="btn-add">
                   <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;<a href="seller_page.php?book_id=3CAKA" >Buy Book</a></p>
                   <p class="btn-details">
                   <span class="glyphicon glyphicon-flag"></span>&nbsp;<a href="#" data-toggle="modal" data-target="#myModal3"  data-toggle="tooltip" data-placement="top" title="sell BOOK" >Sell Book</a></p>
                   </div>
                   <div class="clearfix">
                   </div>				   
                  </div>
              </div>
           </div>
	   </div>   		
   </div>
</div>
 

 
 
 
 
 
 
 
 
 
 
<br><br><br><br><br>
		   
<!--FOOTER START-->		   
<div id="footer">

  <div class= "container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="www.facebook.com/olbe"><img src="image/f1.png"></a>
	  <a class="navbar-brand" href="#"><img src="image/g.png"></a>
	  <a class="navbar-brand" href="#"><img src="image/t.png"></a>
	  <a class="navbar-brand" href="#"><img src="image/e.png"></a>
    </div>

	<div class="navbar-form navbar-right" role="search">
       <input type="text" id="findInput" class="form-control" placeholder="Search Here"  size="15" >&nbsp;<button type="submit" class="button-link1 " onclick="FindNext ();" >Search</button>
   </div>
  </div>

</div> 
<!--FOOTER FINISH-->
				
	

	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
				
	
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

           
		   &nbsp;&nbsp;&nbsp;<font style="font-family: ; font-size: 13px; color: #2b74a4;">forgot password ?</font> 
		   <b><a href="#" data-toggle="modal" data-target="#myModal10"  data-toggle="tooltip" data-placement="top" title="forgot password"><font style="font-family: ; font-size: 13px; color: red;">&nbsp;click&nbsp;here</font></a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  </form>
          <a href="profile.php" title="Update Profile"><button type="submit" >update Profile</button></a>&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#myModal1"  data-toggle="tooltip" data-placement="top" title="forgot password"><button type="submit" >remove book Advt.</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </div>	
  </div>
</div>	
<!--MODEL SIGN IN PAGE FINISH-->					
			


	
	
	
	
	
	
	
	
	
	
		
					
<!-- MODEL SIGN UP 1 START -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-footer">
       <img width="250" height="360" src="image/aaa.gif"   alt="REGISTER ON OLBE" align="left"> 
	      <form class="form-inline" role="form" method="post" action="3_cs.php">
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <br>
             <div class="form-group">
               <input class="inp"  required size="26" type="email" onBlur="checkAvailability3()" id="username1" name="username" placeholder="Enter email" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <br><span id="user-availability-status3"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
               <input class="inp" required type="password" name="password" placeholder="Password" size="13" >&nbsp;<input type="text"  name="roll_no" class="inp" required placeholder="Roll No" size="6" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <br><br> 
               <input class="inp" required type="text" name="full_name" placeholder="Full Name" size="26" style='text-transform:uppercase'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <br><br>
               <input class="inp" required type="text" name="mob_number" placeholder="Mobile Number" size="26"  maxlength="10"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<!--MODEL 1 FINISH-->					
					
	
	
	
	
		
					
<!-- MODEL remove advt. START --> 
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <div class="modal-body">


	      <form class="form-inline" role="form" method="post" action="index.php">
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
           	        <img size="100%" src="image/cloud.png" alt="OLBE Sign In" align="center"><br> 
		   <br>
             <div class="form-group">
               <input class="inp"  required size="26" type="email"   name="username" placeholder="Enter email" ><br><br>
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
					
<!--finish-->					
	
	
	
	


	
	
	
	
	
	
	
		
<!--JAVASCRIPT FOR SEARCH IN PAGE-->
 <script type="text/javascript">
        function FindNext () {
            var str = document.getElementById ("findInput").value;
            if (str == "") {
                alert ("Please enter some text to search!");
                return;
            }
            
            if (window.find) {        // Firefox, Google Chrome, Safari
                var found = window.find (str);
                if (!found) {
                    alert ("The following text was not found:\n" + str);
                }
            }
            else {
                alert ("Your browser does not support this example!");
            }
        }
    </script>
<!--JAVA SCRIPT FINISH-->	

	
	
	
	
	
	
	
		
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



	
	
	
					
</body>
</html>