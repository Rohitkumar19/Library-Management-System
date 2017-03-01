<?php include 'database.php' ?>
<?php
session_start();
$rolln=$_POST['lid'];
$rollno=strtoupper($rolln);
$_SESSION["rollno"]=$rollno;
$password=$_POST['lpass'];
$op=mysqli_query($connect,"SELECT password FROM staff WHERE lid='$rollno'");
$row=mysqli_fetch_assoc($op);
if($password!=$row['password'])
{
	echo "invalid Roll no and password combination<br>please try again later<br>";
	echo "<a href='http://localhost/folder/Mainpage.php'>go back</a>";


}
else
{
header('Location: http://localhost/folder/aftrstafflogin.php');
die();
}
?>