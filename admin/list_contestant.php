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
<script type="text/javascript">
function readySubmit(){
if(confirm("Are you ready to delete this Contestant? ")){
return true;
}
else{
return false;
}
}
 function readySubmit2(){
if(confirm("Are you ready to edit this Contestant? ")){
return true;
}
else{
return false;
}
}
</script>
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
  <tr bgcolor="#FFFFFF">
    <td height="178"><p>&nbsp;</p><table align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr>
        <td width="179" align="center" class="td"></td>
        </tr>
    </table><p>&nbsp;</p>
   </td>
  </tr>
  <tr>
    <td><img src="../image/bar.jpg" width="1000" height="20" /></td>
  </tr>
</table>
</body>
</html><?php require_once ("../connectme.php");
// holds the distinct number of positions
$gotten = mysql_query("SELECT DISTINCT post FROM contestant") or die (mysql_error());
$_SESSION['num'] = mysql_num_rows($gotten);
while ($rowss = mysql_fetch_array($gotten)){
	$post = $rowss['post'];
	$posttest = 0;
	$get1 = mysql_query("SELECT * FROM contestant WHERE post = '$post'") or die (mysql_error());
	while ($row = mysql_fetch_array($get1)){
		$cont_id = $row['cont_id'];
		$get2 = mysql_query("SELECT postname FROM post WHERE id = '$post'") or die(mysql_error());
		while ($row2 = mysql_fetch_array($get2)){
			if ($posttest != $post){
				echo "<tr><td align =center colspan=2><h2><b>".$postname = strtoupper($row2['postname'])."</b></h2></td></tr>";
				echo "<tr><td><b>NAME</b></td>";
				echo "<td><b>NICKNAME</b></td>";
				echo "<td colspan='2' align ='center'><b>ACTION</b></td></tr>";
			}
			$cont_id = $row['cont_id'];
			echo "<tr><td>".$name = $row['name']."</td>";
			echo "<td>".$nickname = $row['nickname']."</td>";
			//echo "<td><form name= 'form1' action = 'edit_contestant.php' onSubmit=return(readySubmit2())><input type=hidden name=id value=$cont_id><input name='Edit' type='Submit' value='Edit' /></form></td>";
			echo "<td><form name= 'form1' action = 'delete.php' onSubmit=return(readySubmit())><input type=hidden name=id value=$cont_id><input name='Delete' type='Submit' value='Delete' /></form></td></tr>";
			$posttest = $post;
		}
	}
}
?>