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
    <td height="178"><form name="form1" action="post_process.php" method="post"><table width="477" align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr>
        <td width="179" align="center" class="td">&nbsp;</td>
        <td width="240" align="center" class="td"><strong>Add Post</strong></td>
      </tr>
      <tr>
        <td align="center" class="td"><div align="left">Post Name</div></td>
        <td align="center" class="td"><label>
        <div align="left">
          <input name="post" type="text" id="post" size="60" />
        </div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td">&nbsp;</td>
        <td align="center" class="td"><label></label></td>
      </tr>
      <tr>
        <td height="49" align="center" class="td">&nbsp;</td>
        <td align="center" class="td"><label>
          <div align="left">
            <input type="submit" name="button" id="button" value="Submit" />
            </div>
        </label></td>
      </tr>
    </table>
    </form></td>
  </tr>
  <tr>
    <td><img src="../image/bar.jpg" width="1000" height="20" /></td>
  </tr>
</table>
</body>
</html>