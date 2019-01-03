<?php
$cont_id = $_REQUEST['id'];
require_once ("../connectme.php");
mysql_query("DELETE FROM contestant WHERE cont_id = '$cont_id'") or die (mysql_error());
header ("location:list_contestant.php");
?>