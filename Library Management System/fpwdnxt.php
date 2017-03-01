<?php include 'database.php' ?>
<?php
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$birthday=$_POST['birthday'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$op=mysqli_query($connect,"SELECT * FROM student WHERE username='$name'");
$row=mysqli_fetch_assoc($op);
if($rollno!=$row['Roll_No']||$birthday!=$row['birthday'])
{
	echo "invalid roll no. name and d.o.b combinations,<br> plz <a href='http://localhost/folder/forgotpassword.php'>try again</a>";
}
else
{
	if($password1!=$password2)
	{
		echo "entered passwords do not match<br> plz <a href='http://localhost/folder/forgotpassword.php'>try again</a>";
	}
	else
	{
		mysqli_query($connect,"UPDATE student SET password='$password1' WHERE username='$name'");
		if(mysqli_affected_rows($connect)>0)
		{
			echo "password updated<br><a href='http://localhost/folder/Mainpage.php'>go home</a>";
		}
		
	}
}