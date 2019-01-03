<?php 
session_start();
require ("../connectme.php");
 // username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM password WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
 // Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// set session variable
while($row=mysql_fetch_array($result)){  
			$_SESSION['id']= $row['id'];  
}
			header("location: main.php");
}
else {
echo "Wrong Username or Password click <a href='index.php'>here</a> to try again";
}
?>
