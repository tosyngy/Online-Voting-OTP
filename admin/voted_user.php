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
    <td height="38"><img name="banner" src="../image/banner.png" width="1000" height="180" border="0" id="banner" alt="" /></td>
  </tr>
  <tr>
    <td height="39" bgcolor="#62EF7E"><?php include 'toplinks.php';?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="178"><p>&nbsp;</p><table align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr><td width="29" valign="top"><?php
require ('../connectme.php');

$sql="SELECT matric_no, password FROM students WHERE status ='1' order by matric_no " or die(mysql_error());
$result= mysql_query($sql)or die(mysql_error());
$count=mysql_num_rows($result);
// If result matched, table row must be greater than 1 row
$sn=1;
if($count>=1){
echo "<tr><td colspan = 3 align = center><b>DETAILS OF VOTERS WHO HAS VOTED</b></td></tr>";

echo "<tr><td><b>SERIAL</b></td><td><b> USERNAME</b></td><td><b>NAME </b></td></tr>";
while($row=mysql_fetch_array($result)){
@$id= $row['id'];		
$matric_no= $row['matric_no'];
$password= $row['password'];

//if 	($author_name[0]==$test || $author_name[0] == $test2){
echo "<tr><td>$sn</td><td>$matric_no</td><td>$password</td><td></tr>";
$sn++;
}
}
//else echo "No result found"

?></td>
    </tr></table><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td><img src="../image/bar.jpg" width="1000" height="20" /></td>
  </tr>
</table>
</body>
</html>