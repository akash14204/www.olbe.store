<?php
include('config.php');
?>


<html>
    <head>
        <!--BOOTSTRAP ATTACH-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"><!--final size not declared in mobile for zoom-->
<link rel="shortcut icon" href="image/logo2.png">
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
<script src="js/jquery.min.js"  type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<!--BOOTSTRAP FINISH-->
<meta  content='text/html;  charset=UTF-8'  http-equiv='Content-Type'/>
<link  rel="stylesheet"  type="text/css"  href="style.css"  />
<title>welcome in OLBE</title>
    </head>
	
<body>

<?php
//If the user is logged, we log him out
if(isset($_SESSION['username']))
{
	//We log him out by deleting the username and userid sessions
	unset($_SESSION['username'], $_SESSION['userid']);
?>
You have successfuly been loged out
<a href="<?php echo $url_home; ?>">Home</a></div>
  	

<?php
}
	else{
		$ousername = '';
	//We check if the form has been sent
	if(isset($_POST['username'], $_POST['password']))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username = mysql_real_escape_string(stripslashes($_POST['username']));
			$password = stripslashes($_POST['password']);
		}
	
	
	if(isset($_POST['username'], $_POST['password']))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
			
			$username = mysql_real_escape_string(stripslashes($_POST['username']));
			$password = stripslashes($_POST['password']);
		}
		else
		{
			$username = mysql_real_escape_string($_POST['username']);
			$password = $_POST['password'];
		}
		//We get the password of the user
		$req = mysql_query('select password,mem_id from olbe_students_registration_table where username="'.$username.'"');
		$dn = mysql_fetch_array($req);
		//We compare the submited password and the real one, and we check if the user exists
		if($dn['password']==$password and mysql_num_rows($req)>0)
		{
			//If the password is good, we dont show the form
			$form = false;
			//We save the user name in the session username and the user Id in the session userid
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['userid'] = $dn['mem_id'];
			
			
			
			
			// we display the values of the database in echo
			$dnn = mysql_fetch_array(mysql_query('select username,room_hostel,hostel_name,full_name,mob_number from olbe_students_registration_table where username="'.$_SESSION['username'].'"'));
			$username = htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8');
			$room_hostel = htmlentities($dnn['room_hostel'], ENT_QUOTES, 'UTF-8');
			$hostel_name = htmlentities($dnn['hostel_name'], ENT_QUOTES, 'UTF-8');
			$full_name = htmlentities($dnn['full_name'], ENT_QUOTES, 'UTF-8');
			$mob_number = htmlentities($dnn['mob_number'], ENT_QUOTES, 'UTF-8');
?>
<div class="container">
<div class="row">

<div class="col-md-2">
</div>

<div class="col-md-6">
<br><br>
<center><img src="image/cloud.png"></center>
<br><br><br><br>



<div class="div2">
<div  align="left"  id="tb-name">Reg  id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $_POST['username']; ?></div>

<div  align="left"  id="tb-name">MOBILE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $full_name; ?></div>

<div  align="left"  id="tb-name">EMAIL ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $room_hostel; ?> </div>

<div  align="left"  id="tb-name">HOSTEL NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $hostel_name; ?></div>

<div  align="left"  id="tb-name">ROOM NUMBER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $mob_number; ?></div>
</div>

</div>

<div class="col-md-3 data">
<p  style="font-weight:bold;  font-size:20px;  font-family:Segoe  Print;  color:#fff;">OLBE Welcomes U</p>
<br><br>
<a href="logout.php"><button class="button-link">Logout</button></a><br /><br />
<a href="edit_infos.php"><button class="button-link">Edit Profile</button></a>

</div>


<div class="col-md-1">
</div>
</div>
</div>


<?php
		}
		else
		{
			//Otherwise, we say the password is incorrect.
			
			echo  '<font color="white">The username or password is incorrect.</font>';
		}
	}
	else
	{
		echo  '<font color="white">The username or password is incorrect.</font>';
	}
	
?>

<?php
	}
	}
?>

	
	</body>
</html>