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
  <tr>
    <td height="178" bgcolor="#FFFFFF"><form name="form1" action="add_voters_process.php" method="post">
      <table width="477" align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr>
        <td colspan="2" align="center" class="td"><strong>Add Voters Details</strong></td>
        </tr>
      <tr>
        <td width="179" align="center" class="td"><div align="left">Matric Number</div></td>
        <td width="240" align="center" class="td"><label>
        <div align="left">
          <input type="text" name="matric_no" id="matric_no" />
        </div>
        </label></td>
      </tr>
      <tr>
        <td width="179" align="center" class="td"><div align="left">Mobile no</div></td>
        <td width="240" align="center" class="td"><label>
        <div align="left">
          <input type="text" name="phone_no" id="phone_no" />
        </div>
        </label></td>
      </tr>
      <tr>
        <td width="179" align="center" class="td"><div align="left">Confirm Mobile no</div></td>
        <td width="240" align="center" class="td"><label>
        <div align="left">
          <input type="text" name="phone_no2" id="phone_no2" />
        </div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td"><div align="left">Password</div></td>
        <td align="center" class="td"><label>
          <div align="left">
            <input type="password" name="password" id="password" />
            </div>
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td">&nbsp;</td>
        <td align="center" class="td"><label>
          <input type="submit" name="button" id="button" value="Submit" />
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