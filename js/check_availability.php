<?php



require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["username"])) {
  $result = mysql_query("SELECT count(*) FROM olbe_students_registration_table WHERE userName='" . $_POST["username"] . "'");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-available'>email is Registered in olbe</span>";
  }else{
      echo "<span class='status-not-available'>email not registered yet</span>";
  }
}
?>


<?php



require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["seller_olbe_password"])) {
  $result = mysql_query("SELECT count(*) FROM olbe_students_registration_table WHERE password='" . $_POST["seller_olbe_password"] . "'");
 @ $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-available'> matched </span>";
  }else{
      echo "<span class='status-not-available'>incorrect,sign up for  sell the books</span>";
  }
}
?>




<?php



require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["seller_book_code"])) {
  $result = mysql_query("SELECT count(*) FROM olbe_seller_table WHERE seller_book_code='" . $_POST["seller_book_code"] . "'");
 @ $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-available'>Yahoo !&nbsp;&nbsp;Book is  &nbsp;&nbsp;Available in olbe &nbsp;&nbsp;store . &nbsp;Buy Now</span>";
  }else{
      echo "<span class='status-not-available'>Sorry Book is not Available in this coloumn. Try in other Box</span>";
  }
}
?>





<?php



require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["seller_book_code_2"])) {
  $result = mysql_query("SELECT count(*) FROM olbe_seller_table WHERE seller_book_code_2='" . $_POST["seller_book_code_2"] . "'");
 @ $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-available'>Yes Book is Available for Buy </span>";
  }else{
      echo "<span class='status-not-available'>Sorry Book is not Available in this coloumn. Try in other Box</span>";
  }
}
?>



<?php



require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["username"])) {
  $result = mysql_query("SELECT count(*) FROM olbe_students_registration_table WHERE userName='" . $_POST["username"] . "'");
@  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-available'></span>";//empty because whole condition written in first
  }else{
      echo "<span class='status-not-available'></span>";//empty because whole condition written in first
  }
}
?>

