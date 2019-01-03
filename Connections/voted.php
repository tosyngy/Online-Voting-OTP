<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_voted = "localhost";
$database_voted = "evoting";
$username_voted = "root";
$password_voted = "";
$voted = mysql_pconnect($hostname_voted, $username_voted, $password_voted) or trigger_error(mysql_error(),E_USER_ERROR); 
?>