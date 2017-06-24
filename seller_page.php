
<?php
include_once('dbConnection.php');
?>
	
	



<!DOCTYPE HTML>
<html>

<!--head start-->
<head>
<title>Online Book Exchange</title>




<!--BOOTSTRAP ATTACH-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"><!--final size not declared in mobile for zoom-->
<link rel="shortcut icon" href="image/logo2.png">
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
<script src="js/jquery.min.js"  type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<!--BOOTSTRAP FINISH-->



<!--MINE CSS -->
<link rel="stylesheet" type="text/css" href="style1.css" />
<!--MINE CSS FINISH -->


</head>
<!--head closed-->













<!--body start-->
<body>


<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">

 <?php
 if(isset($_GET['book_id'])){
	 $book_id=$_GET['book_id'];
	 
	$var=0;
$query=$con->query("SELECT * FROM olbe_seller_table where seller_book_code ='$book_id' or seller_book_code_2='$book_id'");
while($row=$query->fetch_assoc()){
	$username=$row['username'];
	$var=1;
	$query1=$con->query("SELECT * FROM olbe_students_registration_table where username='$username'");
while($row1=$query1->fetch_assoc()){
     
	 $full_name=$row1['full_name'];
	 $mob_number=$row1['mob_number'];
	 $room_hostel=$row1['room_hostel'];
	 $hostel_name=$row1['hostel_name'];
	echo "<br><br>" ;
 ?>
	


<div  class="box">

<div  class="box_head">Seller</div>
<!--SELLER TABLE-->
<table  border="0"  align="center"  cellpadding="2"  cellspacing="0">  
   <tr  class="data">
     <td  class="table_col_1"><div  align="left"  class="table_names">Seller Name&nbsp;:</div></td>
     <td  class="table_col_2"><?php echo "&nbsp;&nbsp;$full_name<br>";?></td>
   </tr>
   
   <tr  class="data">
     <td  class="table_col_1"><div  align="left"  class="table_names">Hostel&nbsp;:</div></td>
     <td  class="table_col_2"><?php  echo "&nbsp;&nbsp;$hostel_name<br>";  ?></td>
   </tr>
   
   <tr  class="data">
     <td  class="table_col_1"><div  align="left"  class="table_names">Room&nbsp;:</div></td>
     <td  class="table_col_2"><?php echo "&nbsp;&nbsp;$room_hostel<br>"; ?></td>
   </tr>
   
    <tr  class="data">
      <td  class="table_col_1"><div  align="left"  class="table_names">Mobile Number&nbsp;:</div></td>
      <td  class="table_col_2"><?php  echo "&nbsp;&nbsp;$mob_number<br>"; ?></td>
    </tr>	
</table>
<!--SELLER TABLE FINISH-->
<div  class="footer"  >Copyright  &copy;  Olbe</div>

</div>


 

<?php
}}}
if($var==0){
	echo '<br><br><br><br><br><br><br><br><br><br><div  class="box_head">Books will be available soon........</div>';
}
?>
</div>
<div class="col-md-3">
</div>
</div>
 </div>
 </body>
 </head>
 </html>
 
 
 
 
 
 
 
 
 
 