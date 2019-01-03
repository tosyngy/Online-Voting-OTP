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
<title>.</title>
<link href="../yusufishola.css" rel="stylesheet" type="text/css"/>
<link href="../yusufishola.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
<!--
body {
	background-color: #BFF9CB;
}
-->
</style></head>
<body><table width="1000" border="1" align="center" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="77"><img name="banner" src="../image/banner.png" width="1000" height="180" border="0" id="banner" alt="" /></td>
  </tr>
  <tr>
    <td height="178"><p>&nbsp;</p><?php include 'links.php';?><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td><img src="../image/bar.jpg" width="1000" height="20" /></td>
  </tr>
</table>
</body>
</html>