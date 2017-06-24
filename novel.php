

<?php
include_once('dbConnection1.php');
if(isset($_POST['submit']))

{
// username and password sent from form 
@$username=$_POST['username']; 
@$password=$_POST['password']; //taking password of seller and put in variable


$sql="SELECT * FROM olbe_novel_registration WHERE username='$username' and password='$password'";
$result4=mysql_query($sql);

// Mysql_num_row is counting table row
@$count=mysql_num_rows($result4);

// If result matched $username and $password, table row must be 1 row
if($count==1){

@ $mem_id = $_POST['mem_id'];
$novel_name = $_POST['novel_name'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$username= $_POST['username'];
$price= $_POST['price'];


 if(mysqli_query($con,"INSERT INTO olbe_novel VALUES('$mem_id','$novel_name','$name','$mobile','$username','$price')"))
{
	
$result1= " <font color='white'>your novel advertisment is accepted. u will get call from buyer in some days.. </font>";
}

}
else{
$result2="<font color='white'>wrong email or password. no problem ;) sign up again or click on forget password. Its easy :)</font>";
}
}
?>



<!--PHP FOR SIGN UP PAGE-->
<?php
include_once('dbConnection.php');

if(isset($_POST['submit2']))

{
@ $mem_id = $_POST['mem_id'];
$username = $_POST['username'];
$password = $_POST['password'];


 if(mysqli_query($con,"INSERT INTO olbe_novel_registration VALUES('$mem_id','$username','$password')"))
{
$result="<font color='white'>Registration Successful</font>";
}

}
?>
<!--FINISH 1st PHP-->


<!--PHP FOR remove-->
<?php
include_once('dbConnection.php');

if(isset($_POST['submit3']))

{
@ $mem_id = $_POST['mem_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$novel_name = $_POST['novel_name'];



 if(mysqli_query($con,"INSERT INTO olbe_novel_remove VALUES('$mem_id','$username','$password','$novel_name')"))
{
$result5="<font color='white'>Your email recieved(if password matched) ..we will remove ur Advertisment in few minutes.... :) </font>";
}

}
?>
<!--FINISH 1st PHP-->






<!--forgot password-->
<?php
if(isset($_POST['submit5']))
{ 
 mysql_connect('localhost','olbein_olbe_user','Akashswapnil786') or die(mysql_error());
 mysql_select_db('olbein_olbe2') or die(mysql_error());
 $mail=$_POST['username'];
 $q=mysql_query("select * from olbe_novel_registration where username='".$mail."' ") or die(mysql_error());
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
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<!--BOOTSTRAP FINISH-->


<!--MINE CSS -->
<link rel="stylesheet" type="text/css" href="style3.css" />
<!--MINE CSS FINISH -->


<!--JAVASCRIPT FOR CHECK DETAILS FROM DATABASE-->
<script src="js/a.js" type="text/javascript"></script>
<!--JAVASCRIPT FINISH-->

</head>
<!--head closed-->






<body>


<img src="image/aq.jpg" class="image">



<nav class = "navbar navbar-custom" role = "navigation">
 <div class="container-fluid"> 
   <div class = "navbar-header">
      <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
	  <a href="index.php">&nbsp;&nbsp;&nbsp;<img src="image/logo1.png" title="OLBE Welcomes You"></a>
   </div>
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	 <font color="white"><ul class = "nav navbar-nav navbar-right">
         <li class = "active"><a href="#" class="color-me" data-toggle="modal" data-target="#myModal_signup"  data-toggle="tooltip" data-placement="top" title="sign up">Sign Up</a></li>
		 <li><a href="#" class="color-me" data-toggle="modal" data-target="#myModal_remove"  data-toggle="tooltip" data-placement="top" title="sign up">Remove Advertisement</a></li>	
         <li><a href="#" data-toggle="modal" data-target="#myModal_search"  data-toggle="tooltip" data-placement="top" title="Search novel"><span class="glyphicon glyphicon-search  white" aria-hidden="true"></a></li>	 
      </ul></font>
   </div>
 </div>  
</nav>





<div class="display2 ">
 <?php if(isset($result1))echo $result1; ?>
 <?php if(isset($result))echo $result; ?> 
 <?php if(isset($result5))echo $result5; ?>
 <?php if(isset($result2))echo $result2; ?><br>
<font style='  font-size: 26px; color: white; font-family: "Lobster", cursive;'>olbe novels</font> <font style='  font-size: 26px; color: white; font-weight:bold;'>&nbsp;presents</font>

<form action="" method="post" name="insertform" class="form">
<p>
  <input type="text" name="novel_name" required style='text-transform:uppercase' placeholder="Put your novel name" class="inp"/>
</p>
<p>
  <input type="text" name="name" required style='text-transform:uppercase' placeholder="Enter your name"class="inp" />
</p>
<p>
  <input type="text" name="mobile" required maxlength="10" placeholder="Enter your mobile" class="inp" />
  </p>
  <p>
  <input type="email" name="username" required placeholder="Enter your email" class="inp" />
</p>
<p> <input type="password" name="password" required placeholder="Password" class="inp2" />&nbsp;

  <select name="price" type="text" onchange='CheckColors(this.value);' class="inp2" ><!--for select exchange or sell-->
    <option>Exchange</option>  
    <option value="others">Sell</option>
  </select></p> 
<p> <input type="number" name="price" id="color" style='display:none;' placeholder="Put Your Price" class="inp" />

<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('color');
 if(val=='pick a color'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 



</p>

<p><br>
  <b><input type="submit" name="submit" value="Submit" class="button-link"  /></b><br>
  
  <font color="white">not rememeber  password?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#myModal_forgotpassword"  data-toggle="tooltip" data-placement="top" title="forgot password"><font color="white">click here</font></a> </font>

</p>
</form>
</div>











<div class="container">
<div class="row  row_color">
<div class="col-md-2">
</div>
<div class="col-md-8">



<?php include('view_novel.php');?>


</div>

<div class="col-md-2">
</div></div></div>

























			
	
<!-- MODAL SIGN UP PAGE-->
<div class="modal fade" id="myModal_signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <div class="modal-body">
		 <form class="form-inline" role="form" method="post" action="">
		   
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img height="40" width="40" src="image/cloud.png" alt="OLBE Sign In" align="center"><br> <br>
           <div class="form-group">
              <input type="text" required class="inp_signup" name="username"  placeholder="Email" size="24"><br><br>
			  <input type="password" required class="inp_signup" name="password"  placeholder="New Password" size="24">
             
           </div><br><br><br>
           <button type="submit" name="submit2" class="button-link2" data-toggle="tooltip" title="welcome to OLBE" >&nbsp;olbe&nbsp;welcome&nbsp;you&nbsp;</button><br>
          </form>
      </div>
    </div>	
  </div>
</div>	
<!--MODEL SIGN IN PAGE FINISH-->		














<!-- MODAL novel remove-->
<div class="modal fade" id="myModal_remove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <div class="modal-body">
		 <form class="form-inline" role="form" method="post" action="">
		   
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img height="40" width="40" src="image/cloud.png" alt="OLBE Sign In" align="center"><br> <br>
           <div class="form-group">
              <input type="text" required class="inp_signup" name="username"  placeholder="Email" size="24"><br><br>
			  <input type="password" required class="inp_signup" name="password"  placeholder="Password" size="24"><br><br>
			  <input type="text" required class="inp_signup" name="novel_name"  placeholder="Novel name " size="24">
             
           </div><br><br><br>
           <button type="submit" name="submit3" class="button-link2" data-toggle="tooltip" title="welcome to OLBE" >&nbsp;olbe&nbsp;welcome&nbsp;you&nbsp;</button><br>
          </form>
      </div>
    </div>	
  </div>
</div>	
<!--MODEL novel remove FINISH-->		











<!-- MODAL search-->
<div class="modal fade " id="myModal_search" class="myModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>  <br />
<center><font style='font-size: 25px; color: ORANGE; font-weight:BOLD;' >Press  Ctrl+F</font></center>
     </div>
	</div>	
  </div>
</div>		
<!--MODEL search FINISH-->		









  
 	
  
<!-- MODAL FOR forgot password-->
<div class="modal fade " id="myModal_forgotpassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
   <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>  

<form action='' method='post'>
	
   <font style="font-family: ; font-weight:bold; font-size: 26px; color: orange; text-shadow: 4px 4px 2px rgba(230, 230, 230, 1);">Forgot Password</font><br><br>

<input type='text' class="inp" width="100px"name='username' placeholder="Email"/><br><br>
<input type='submit' name='submit5' class="button-link" value='Submit'/>

</form>
     </div>
	</div>	
  </div>
</div>






</body>
</html>