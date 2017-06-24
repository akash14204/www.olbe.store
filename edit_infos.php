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
//We check if the user is logged
if(isset($_SESSION['username']))
{
	//We check if the form has been sent
	if(isset($_POST['username'], $_POST['room_hostel'], $_POST['hostel_name'],  $_POST['full_name'], $_POST['mob_number']))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
			$_POST['username'] = stripslashes($_POST['username']);
			$_POST['room_hostel'] = stripslashes($_POST['room_hostel']);
			$_POST['hostel_name'] = stripslashes($_POST['hostel_name']);
			$_POST['full_name'] = stripslashes($_POST['full_name']);
			$_POST['mob_number'] = stripslashes($_POST['mob_number']);
		}

					//We protect the variables
					$username = mysql_real_escape_string($_POST['username']);
					$room_hostel = mysql_real_escape_string($_POST['room_hostel']);
					$hostel_name = mysql_real_escape_string($_POST['hostel_name']);
					$full_name = mysql_real_escape_string($_POST['full_name']);
					$mob_number = mysql_real_escape_string($_POST['mob_number']);
					//We check if there is no other user using the same username
					$dn = mysql_fetch_array(mysql_query('select count(*) as nb from olbe_students_registration_table where username="'.$username.'"'));
					//We check if the username changed and if it is available
					if($dn['nb']==0 or $_POST['username']==$_SESSION['username'])
					{
						//We edit the user informations
						if(mysql_query('update olbe_students_registration_table set username="'.$username.'", room_hostel="'.$room_hostel.'",hostel_name="'.$hostel_name.'", full_name="'.$full_name.'", mob_number="'.$mob_number.'" where mem_id="'.mysql_real_escape_string($_SESSION['userid']).'"'))
						{
							//We dont display the form
							$form = false;
							//We delete the old sessions so the user need to log again
							unset($_SESSION['username'], $_SESSION['userid']);
?>

<br><br><br><br>
<center><a href="index.php"><img src="image/cloud.png"></a></center>
<br><br><br><br>
<center><font color="white">Your informations have successfuly been updated. You need to log again.</font></center><br />

<?php
						}
						else
						{
							//Otherwise, we say that an error occured
							
							echo '<font color="white">An error occurred while updating your informations.</font>';
						}
					}
					else
					{
						//Otherwise, we say the username is not available
						echo '<font color="white">The username you want to use is not available, please choose another one.</font>';
					}


	
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//We display a message if necessary
		if(isset($message))
		{
			echo '<strong>'.$message.'</strong>';
		}
		//If the form has already been sent, we display the same values
		if(isset($_POST['username'],$_POST['password'],$_POST['full_name']))
		{
			$pseudo = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
	        $full_name = htmlentities($_POST['room_hostel'], ENT_QUOTES, 'UTF-8');
			$mob_number = htmlentities($_POST['hostel_name'], ENT_QUOTES, 'UTF-8');
			$full_name = htmlentities($_POST['full_name'], ENT_QUOTES, 'UTF-8');
			$mob_number = htmlentities($_POST['mob_number'], ENT_QUOTES, 'UTF-8');
		}
		else
		{
			//otherwise, we display the values of the database
			$dnn = mysql_fetch_array(mysql_query('select username,room_hostel,hostel_name,full_name,mob_number from olbe_students_registration_table where username="'.$_SESSION['username'].'"'));
			$username = htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8');
			$room_hostel = htmlentities($dnn['room_hostel'], ENT_QUOTES, 'UTF-8');
			$hostel_name = htmlentities($dnn['hostel_name'], ENT_QUOTES, 'UTF-8');
			$full_name = htmlentities($dnn['full_name'], ENT_QUOTES, 'UTF-8');
			$mob_number = htmlentities($dnn['mob_number'], ENT_QUOTES, 'UTF-8');
		}
		//We display the form
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




<form action="" method="post">
        
       
            <div  align="left"  id="tb-name""username">Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="username" id="username" class="inp" value="<?php echo $username; ?>" /></div>
            <div  align="left"  id="tb-name">room_hostel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="inp" type="text" name="room_hostel" id="room_hostel" value="<?php echo $room_hostel; ?>" /></div>
            <div  align="left"  id="tb-name""hostel_name">hostel_name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="inp"type="text" name="hostel_name" id="hostel_name" value="<?php echo $hostel_name; ?>" /></div>
            <div  align="left"  id="tb-name""full_name">full_name
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="full_name"class="inp" id="full_name" value="<?php echo $full_name; ?>" /></div>
            <div  align="left"  id="tb-name""mob_number">mob_number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="inp"type="text" name="mob_number" id="mob_number" value="<?php echo $mob_number; ?>" /></div>
            
        


</div>
</div>
<div class="col-md-3 data">
<p  style="font-weight:bold;  font-size:20px;  font-family:Segoe  Print;  color:#fff;">OLBE Welcomes U</p>

<br><br>

 <button  class="button-link" type="submit" >Submit Value</button>
 </form>
</div>


<div class="col-md-1">
</div>
</div>
</div>
<?php
	}
}
else
{
?>


<?php
}
?>

	</body>
</html>