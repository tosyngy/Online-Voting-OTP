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
    <td height="38"><img name="banner" src="../image/banner.png" width="1000" height="180" border="0" id="banner" alt="" /></td>
  </tr>
  <tr>
    <td height="39" bgcolor="#62EF7E"><?php include 'toplinks.php';?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="178"><p>&nbsp;</p><table align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr>
        <td width="179" align="center" class="td">
<?php require ("../connectme.php");
// get distinct post 
$gotten = mysql_query("SELECT DISTINCT post FROM voters ORDER BY post ASC") or die (mysql_error());
while ($rowss = mysql_fetch_array($gotten)){
	$post = $rowss['post'];
	//get the name of the post selected
	$getpost = mysql_query ("SELECT postname FROM post WHERE id = '$post'") or die(mysql_error());
	while ($rows = mysql_fetch_array($getpost)){
		echo "<tr><td class='td' colspan =3 align='center'><b>".$postname = $rows['postname']."</b></td></tr>";
		echo "<tr><td><b>NAME</b></td><td><b>NICKNAME</b></td><td><b>SCORE</b></td></tr>";
	}
	// get which contestant aspires for the post selected
	$get1 = mysql_query("SELECT * FROM contestant WHERE post = '$post'") or die (mysql_error());
	while ($row = mysql_fetch_array($get1)){
		$cont_id = $row['cont_id'];
		echo "<tr><td class='td'>".$name = $row['name']."</td>";
		echo "<td class='td'>".$nickname = $row['nickname']."</td>";
		$get2 = mysql_query ("SELECT * FROM voters WHERE post = '$post' 
		AND cont_id ='$cont_id'") or die(mysql_error());
		echo "<td class='td'>".$num = mysql_num_rows($get2)."</td></tr>";
	}
}
?>
    </table><p>&nbsp;</p>
   </td>
  </tr>
  <tr>
    <td><img src="../image/bar.jpg" width="1000" height="20" /></td>
  </tr>
</table>
</body>
</html>