<?php
$mysql_hostname  =  "localhost";
$mysql_user  =  "root";
$mysql_password  =  "";
$mysql_database  =  "olbe2";
$tbl_name="olbe_students_registration_table"; // Table name 
@ $bd  =  mysql_connect($mysql_hostname,  $mysql_user,  $mysql_password)  or  die("Could  not  connect  database");
mysql_select_db($mysql_database,  $bd)  or  die("Could  not  select  database");
$con  =  mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database);
?>

