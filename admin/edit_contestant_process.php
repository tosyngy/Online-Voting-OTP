<?php ob_start();
session_start();
if (!isset($_SESSION['id'])){
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="../yusufishola.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
<!--
body {
	background-color: #BFF9CB;
}
-->
</style>
</head>

<body><table width="1000" border="1" align="center" cellspacing="0">
  <tr>
    <td height="38"><img name="banner" src="../image/banner.gif" width="1000" height="180" border="0" id="banner" alt="" /></td>
  </tr>
  <tr>
    <td height="39" bgcolor="#62EF7E"><?php include 'toplinks.php';?></td>
  </tr>
  <tr>
    <td height="178" bgcolor="#FFFFFF"><table width="743" align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr>
        <td align="center" class="td">&nbsp;</td>
        </tr>
      <tr>
        <td height="49" align="center" class="td">
          <?php 
$file_name = mktime();
require('upload_file.php');
upload_file('../passport', $file_name);
$name = $_POST['name'];
$post =$_POST['post'];
$photo = $file_name;
$nickname = $_POST['nickname'];
$cont_id = $_POST['cont_id'];
require ("../connectme.php");
$add = mysql_query("UPDATE contestant SET name = $name, post= '$post', nickname = $nickname, photo = $photo WHERE cont_id = '$cont_id'") or die(mysql_error());
	echo "Contestant Details Has Been Modified Click <a href='list_contestant.php'>Here</a> To Modify Another";
?></td>
        </tr>
    </table>
</td>
  </tr>
  <tr>
    <td><img src="../image/bar.jpg" width="1000" height="20" /></td>
  </tr>
</table>
</body>
</html>