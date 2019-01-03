<?php ob_start();
session_start();
if (!isset($_SESSION['id'])){
	header("location:index.php");
}
?>
<?php require ("../connectme.php");?>
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
    <td height="178"><p><form action="add_contestant_process.php" method="post" enctype="multipart/form-data" name="form1"><table width="477" align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr>
        <td colspan="2" align="center" class="td"><strong>Add Contestant Details</strong></td>
        </tr>
      <tr>
        <td width="151" align="center" class="td"><div align="left">Full Name</div></td>
        <td width="304" align="center" class="td"><label>
        <div align="left">
          <input name="name" type="text" id="name" size="60" />
        </div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td"><div align="left">Post</div></td>
        <td align="center" class="td"><label>
          <div align="left"><?php include 'getpost.php';?></div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td"><div align="left">Nick Name</div></td>
        <td align="center" class="td"><label>
          <div align="left">
            <input name="nickname" type="text" id="nickname" size="40" />
          </div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td"><div align="left">Photo</div></td>
        <td align="center" class="td"><label>
          <div align="left">
            <input type="file" name="file" id="file" />
            </div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td">&nbsp;</td>
        <td align="center" class="td">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" class="td">&nbsp;</td>
        <td align="center" class="td">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" class="td">&nbsp;</td>
        <td align="center" class="td"><label>
          <div align="left">
            <input type="submit" name="button" id="button" value="Submit" />
            <input type="reset" name="button2" id="button2" value="Reset" />
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