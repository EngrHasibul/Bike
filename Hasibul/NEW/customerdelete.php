<div class="toast">
	<?php
$servername="localhost";
$username="root";
$password="";
$db_name="db_bike";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
{
	die("Connection failed");
}
else
{
 echo nl2br("Successfully connected to the server\n");
}
$sql="DELETE FROM customer WHERE Id = '".$_GET['Id']."'";
if(mysqli_query($conn, $sql))
{
	echo nl2br("Data Deleted successfully\n");
}
else
{
	echo nl2br("error");
}
?>