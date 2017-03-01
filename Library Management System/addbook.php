<?php include 'database.php'?>
<?php
$name=$_POST["name"];
$copy=$_POST["copy"];
mysqli_query($connect,"INSERT INTO bookdb(name,copy) VALUES('$name','$copy')");
if(mysqli_affected_rows($connect)>0)
{
	echo"Book sucessfully added";
	echo"<h3><a href='http://localhost/folder/aftrstafflogin.php'>go back</a></h3>";
}
else
{
	echo"Book NOT added";
	echo mysqli_error($connect);
	echo"<h3><a href='http://localhost/folder/aftrstafflogin.php'>go back</a></h3>";
}
?>