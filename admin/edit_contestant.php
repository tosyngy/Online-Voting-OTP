<?php ob_start();
session_start();
if (!isset($_SESSION['id'])){
	header("location:index.php");
}
$cont_id = $_REQUEST['id'];
require_once ("../connectme.php");
$get_cont = mysql_query("SELECT * FROM contestant WHERE cont_id = '$cont_id'") or die (mysql_error());
$row = mysql_fetch_array($get_cont);
$name = $row[1];
$post = $row[2];
$nickname = $row[3];
$photo = $row[4];
$getpost = mysql_query("SELECT * FROM post WHERE id ='$post'") or die(mysql_error());
$row2 = mysql_fetch_array($getpost);
$pid = $row2[0];
$postname = $row2[1];
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
  <tr bgcolor="#FFFFFF">
    <td height="178"><p><form action="edit_contestant_process.php" method="post" enctype="multipart/form-data" name="form1"><table width="477" align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr>
        <td colspan="2" align="center" class="td"><strong>Modify Contestant Details</strong></td>
        </tr>
      <tr>
        <td width="151" align="center" valign="top" class="td"><div align="left">Full Name</div></td>
        <td width="304" align="center" valign="top" class="td"><div align="left"><input name="name" type="text" id="name" size="60" value="<?php echo $name; ?>" />
        </div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td"><div align="left">Post</div></td>
        <td align="center" valign="top" class="td"><div align="left">
          <?php include 'getpost.php';?></div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td"><div align="left">Nick Name</div></td>
        <td align="center" valign="top" class="td"><div align="left"><input name="nickname" type="text" id="nickname" size="40" value="<?php echo $nickname; ?>" />
          </div>
        </label></td>
      </tr>
      <tr>
        <td align="center" valign="top" class="td"><div align="left">Photo</div></td>
        <td align="center" valign="top" class="td"><div align="left"><?php echo '<img src="../passport/'.$photo.'.jpg"." width=100 border=1>';?>
            <input name="file" type="file" id="file" size="20" />
            <input type="hidden" name="cont_id" id="cont_id" value="<?php echo $cont_id;?>" />
        </div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td">&nbsp;</td>
        <td align="center" class="td">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" class="td">&nbsp;</td>
        <td align="center" class="td"><div align="left"><input type="submit" name="Submit" id="Submit" value="Update" />
        </div>
        </label></td>
      </tr>
    </table>
    </form></p></td>
  </tr>
  <tr>
    <td><img src="../image/bar.jpg" width="1000" height="20" /></td>
  </tr>
</table>
</body>
</html>