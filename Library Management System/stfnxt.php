<?php include 'database.php' ?>
<?php
$name=$_POST['name'];
$rollno=$_POST['lid'];
$birthday=$_POST['dob'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$op=mysqli_query($connect,"SELECT * FROM staff WHERE name='$name'");
$row=mysqli_fetch_assoc($op);
if($rollno!=$row['lid']||$birthday!=$row['dob'])
{
	echo "invalid roll no. name and d.o.b combinations,<br> plz <a href='http://localhost/folder/staffforgotpassword.php'>try again</a>";
}
else
{
	if($password1!=$password2)
	{
		echo "entered passwords do not match<br> plz <a href='http://localhost/folder/staffforgotpassword.php'>try again</a>";
	}
	else
	{
		mysqli_query($connect,"UPDATE staff SET password='$password1' WHERE name='$name'");
		if(mysqli_affected_rows($connect)>0)
		{
			echo "<h3>password updated<br><a href='http://localhost/folder/Mainpage.php'>go home</a></h3>";
		}
		else
		{
			echo "failed".mysqli_error($connect);
		}
		
	}
}