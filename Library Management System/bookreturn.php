<?php include'database.php' ?>
<?php
	session_start();
	$slot=$_SESSION["slot"];
	$rollno=$_SESSION["roll"];
	if($slot==""||$rollno=="")
	{
	echo "enter valid roll no. and slot";	
	}
	if($slot=="slot1")
	{
	$nm=mysqli_query($connect,"SELECT * FROM student WHERE Roll_No='$rollno'");
	$chng=mysqli_fetch_array($nm);
	$bkname=$chng["Book1"];
	$buk=mysqli_query($connect,"SELECT copy FROM bookdb WHERE name='$bkname'");
	$cop=mysqli_fetch_array($buk);
	$newval=$cop["copy"]+1;
	mysqli_query($connect,"UPDATE bookdb SET copy='$newval' WHERE name='$bkname'");
	
	if(mysqli_affected_rows($connect)>0)
	{
		echo"<br><h2>book received</h2>";
		$name=$chng['username'];
		mysqli_query($connect,"UPDATE student SET Book1='' WHERE username='$name'");
			if(mysqli_affected_rows($connect)>0)
	{	echo"<br><h2>Slot 1 is now empty</h2>";
		echo"<h3><a href='http://localhost/folder/aftrstafflogin.php'>go back</a></h3>";
	}
			else
			{echo mysqli_error($connect);}
		
	}
	else
	{
		echo"<br><h2>failed</h2>".mysqli_error($connect);
	}
	}
	else if($slot=="slot2")
	{
	$nm=mysqli_query($connect,"SELECT * FROM student WHERE Roll_No='$rollno'");
	$chng=mysqli_fetch_array($nm);
	$bkname=$chng["Book2"];
	$buk=mysqli_query($connect,"SELECT copy FROM bookdb WHERE name='$bkname'");
	$cop=mysqli_fetch_array($buk);	
	$newval=$cop["copy"]+1;
	mysqli_query($connect,"UPDATE bookdb SET copy='$newval' WHERE name='$bkname'");
	if(mysqli_affected_rows($connect)>0)
	{
		echo"<br><h2>book received</h2>";
			$name=$chng['username'];
			mysqli_query($connect,"UPDATE student SET Book2='' WHERE username='$name'");
			if(mysqli_affected_rows($connect)>0)
	{	echo"<br><h2>Slot 2 is now empty</h2>";
		echo "<h3><a href='http://localhost/folder/aftrstafflogin.php'>go back</a></h3>";
	}
		
	}
	else
	{
		echo"<br><h2> failed</h2><h3><br><a href='http://localhost/folder/aftrstafflogin.php'>go back</a></h3><br>".mysqli_error($connect);
	}	
	}
?>