


<?php
include_once('dbConnection1.php');

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['seller_olbe_password']; //taking password of seller and put in variable


$sql="SELECT * FROM olbe_students_registration_table WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){


header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>