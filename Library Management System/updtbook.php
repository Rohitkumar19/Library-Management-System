<?php include'database.php' ?>
<?php
session_start();
$name=$_SESSION["bknm"];
$cpy=$_POST['newcopy'];
mysqli_query($connect,"UPDATE bookdb SET copy='$cpy' WHERE name='$name'");
if(mysqli_affected_rows($connect)>0)
{
	echo "<h3>Copies updated</h3>";
	echo "<h3><a href='http://localhost/folder/aftrstafflogin.php'>go back</a></h3>";
}
else
{
	echo "<h3>Copies NOT updated</h3>";
	echo mysqli_error($connect);
	echo "<h3><a href='http://localhost/folder/aftrstafflogin.php'>go back</a></h3>";
}
?>