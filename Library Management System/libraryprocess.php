<?php include 'database.php'?>
<?php
$name=$_POST['name'];
$lid=$_POST['lid'];
$email=$_POST['email'];
$birthday=$_POST['bday'];
$password=$_POST['password'];
mysqli_query($connect,"INSERT INTO staff(name,lid,email,password,dob)
 VALUES('$name','$lid','$email','$password','$birthday')");
if(mysqli_affected_rows($connect) > 0)
{
 echo "<p>Employee Added </p>";
} else {
 echo "Employee NOT Added<br />";
 echo mysqli_error ($connect);
}
echo "<br><a href=http://localhost/folder/staffsignup.php>add another one</a><br>";
echo "<a href=http://localhost/folder/Mainpage.php>Home</a>";
?>