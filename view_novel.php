

<!DOCTYPE HTML>
<html>

<!--head start-->
<head>
<title>Online Book Exchange</title>



<!--BOOTSTRAP ATTACH-->
<meta charset="utf-8">
<link rel="shortcut icon" href="image/logo2.png">
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
<script src="js/jquery.min.js"  type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<!--BOOTSTRAP FINISH-->


<!--MINE CSS -->
<link rel="stylesheet" type="text/css" href="style3.css" />
<!--MINE CSS FINISH -->

</head>
<!--head closed-->


<body>




























<?php
 include('dbconnection1.php');
  $select=mysql_query("SELECT * FROM olbe_novel order by mem_id desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
   { 
   if($userrow == 0){ 
   $result= "There are no tryouts at the present time."; 
   } 
 else {
  $mem_id=$userrow['mem_id'];
  $novel_name=$userrow['novel_name'];
  $name=$userrow['name'];
  $mobile=$userrow['mobile'];
  $username=$userrow['username'];
  $price=$userrow['price'];
 }
?>











<div class="display ">
 <div class="row">
   <div class="col-md-8">
    <img src="image/cloud.png" class="image1">&nbsp;
     <font style='  font-size: 15px; color: #2b74a4; font-weight:bold;'>
         &nbsp;&nbsp;&nbsp;NOVEL&nbsp;:&nbsp;&nbsp;</font>
         <span><?php echo "<font style='font-size: 15px; color: black; font-weight:; text-transform:uppercase;'>&nbsp;$novel_name<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font style='font-size: 15px; font-weight:bold; color:#2b74a4; '>PRICE</font>
         &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8377;&nbsp;$price&nbsp;&nbsp;
         </font>" ?></span>&nbsp;&nbsp;
     </div>
     <div class="col-md-4">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style='  font-size: 15px; color: #2b74a4; font-weight:bold;'><button type="submit"  class="button-link2" value="Show Div" onclick="showDiv()" /><b>Buy/Exchange</b></button></font>
     </div>
	 <font style='  font-size: 15px; color: #888888; font-weight:;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8377;0 mean book for exchange</font>
  </div>
</div>



<div class="display3 " id="welcomeDiv" style="display:none;">
<br />
  <p> NAME : <span><?php echo "<font style='  font-size: 15px; color: black; '>$name</font>" ?></span>
  </p>
  <br />
  <p> MOBILE NO : <span><?php echo "<font style='  font-size: 15px; color: black; '>$mobile</font>" ?></span>
  </p>
  <br />
    <p>EMAIL: <span><?php echo "<font style='  font-size: 15px; color: black; '>$username</font>" ?></span>
  </p>
</div>

<?php } ?>
<br>
<center><font style='  font-size: 26px; color: #2b74a4; font-weight:bold;'>YOUR ADVERTISEMENT WILL BE ATTACHED HERE.</FONT></center>

<br>


<script>
function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
</script>



<!-- MODAL FOR advt-->
<div class="modal fade " id="myModal_buy" class="myModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
 <div class="modal-content">  
       <div class="modal-body">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>  <br />
<font style='font-size: 25px; color: ORANGE; font-weight:BOLD;' >CONTACT DETAILS ARE GIVEN BELOW</font>
     </div>
	</div>	
  </div>
</div>							
<!--MODEL FOR adv FINISH-->	
</body>
</html>

