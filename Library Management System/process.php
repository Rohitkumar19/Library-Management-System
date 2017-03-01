<?php include 'database.php'?>
<?php
$name=$_POST['name'];
$roll=$_POST['rollno'];
$rollno=strtoupper($roll);
$email=$_POST['email'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
$password=$_POST['password'];
mysqli_query($connect,"INSERT INTO student(Roll_No,username,email,gender,birthday,password)
 VALUES('$rollno','$name','$email','$gender','$birthday','$password')");
if(mysqli_affected_rows($connect) > 0)
{
 echo "<p>Student Added </p>";
} else {
 echo "Student NOT Added<br />";
 echo mysqli_error ($connect);
}
echo "<br><a href=http://localhost/folder/indexl.php>add another one</a><br>";
echo "<a href=http://localhost/folder/Mainpage.php>Home</a>";
?>