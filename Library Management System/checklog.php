<?php include 'database.php' ?>
<?php
session_start();
$rolln=$_POST['rollno'];
$rollno=strtoupper($rolln);
$_SESSION["rollno"]=$rollno;
$password=$_POST['Password'];
$op=mysqli_query($connect,"SELECT password FROM student WHERE Roll_No='$rollno'");
$row=mysqli_fetch_assoc($op);
if($password!=$row['password']||$rollno==""||$password=="")
{
	echo "invalid Roll no and password combination<br>please try again later<br>";
	echo "<a href='http://localhost/folder/Mainpage.php'>go back</a>";


}
else
{
header('Location: http://localhost/folder/aftrlogin.php');
die();
}
?>