<?php include'database.php' ?>
<?php
session_start();
$rollnu=$_SESSION["rollno"];
$slot=$_POST['slot'];
$book=$_POST['boookselected'];
$mydate=date('Y-m-d');
$nextdt=date('Y-m-d',strtotime("$mydate+7 day"));
$dat=mysqli_query($connect,"SELECT * FROM student WHERE Roll_No='$rollnu'");
$row=mysqli_fetch_assoc($dat);
$find=mysqli_query($connect,"SELECT copy FROM bookdb WHERE name='$book'");
$copy=mysqli_fetch_assoc($find);
if($copy['copy']==0)
{
	echo "book is unavailabe now please try after sometime<br>";
	echo "click <a href='http://localhost/folder/aftrlogin.php'>here</a> to go back<br>";
}
else
{
	if($slot=="Book1")
	{
		if($row['Book1']!=NULL)
			{
				echo "selected slot is full,it contains".$row['Book1']."  please select another slot or return your current book<br>click <a href='http://localhost/folder/aftrlogin.php'>here</a> to go back";
			}
		else
			{
				mysqli_query($connect,"UPDATE student SET Book1='$book',dateofreturnb1='$nextdt',dateofissueb1='$mydate' WHERE Roll_no='$rollnu'");	
				if(mysqli_affected_rows($connect) > 0)
					{
						echo "<p>Book Added To slot 1 </p>";
						echo"<h3><a href='http://localhost/folder/aftrlogin.php'>go back</a></h3>";
					} 
				else 
					{
						echo "Book NOT Added<br />";
						echo mysqli_error($connect);
					}
				$newcp=$copy['copy']-1;
				mysqli_query($connect,"UPDATE bookdb SET copy='$newcp' WHERE name='$book'");
			}
	}
	else
	{
		if($row['Book2']!=NULL)
				{
					echo "selected slot is full,it contains".$row['Book2'];
				}
			else
				{
				mysqli_query($connect,"UPDATE student SET Book2='$book',dateofreturnb2='$nextdt',dateofissueb2='$mydate' WHERE Roll_no='$rollnu'");
				if(mysqli_affected_rows($connect) > 0)
					{
						echo "<p>Book Added To slot 2 </p>";
						echo"<h3><a href='http://localhost/folder/aftrlogin.php'>go back</a></h3>";
					}
				else
					{
						echo "Book NOT Added<br />";
						echo mysqli_error($connect);
						echo"<h3><a href='http://localhost/folder/aftrstafflogin.php'>go back</a></h3>";
					}
				$newcp=$copy['copy']-1;
				mysqli_query($connect,"UPDATE bookdb SET copy='$newcp' WHERE name='$book'");
				}
	}
}
			

?>