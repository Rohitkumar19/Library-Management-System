<?php include 'database.php' ?>
<?php
session_start();
$rollnu=$_SESSION["rollno"];
$dat=mysqli_query($connect,"SELECT * FROM staff WHERE lid='$rollnu'");
$row=mysqli_fetch_assoc($dat);
echo "<h1 align='center'>Hey ".$row['name']."</h1><a href='http://localhost/folder/mainpage.php'>logout</a>";
?>
<html>
<head>
    <title>logged in</title>
<style>

body {
    width: 600px;
    margin: 40px auto;
    font-family: 'trebuchet MS', 'Lucida sans', Arial;
    font-size: 14px;
    color: #444;
}

table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 100%;    
}

.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;         
}

.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;    
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}



/*----------------------*/

.zebra td, .zebra th {
    padding: 10px;
    border-bottom: 1px solid #f2f2f2;    
}

.zebra tbody tr:nth-child(even) {
    background: #f5f5f5;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
}

.zebra th {
    text-align: left;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
    border-bottom: 1px solid #ccc;
    background-color: #eee;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
    background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
    background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
    background-image:      -o-linear-gradient(top, #f5f5f5, #eee); 
    background-image:         linear-gradient(top, #f5f5f5, #eee);
}

.zebra th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;  
}

.zebra th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.zebra th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.zebra tfoot td {
    border-bottom: 0;
    border-top: 1px solid #fff;
    background-color: #f1f1f1;  
}

.zebra tfoot td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.zebra tfoot td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}

.zebra tfoot td:only-child{
    -moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px
    border-radius: 0 0 6px 6px
}
  
</style>
</head>

<body>
<h2>Receive book from student</h2>
<table class="bordered">
    <thead>
    <tr>
		<th>Student Roll no.</th>
		<th>slot no.</th>
		<th>book name</th>
		<th>due date of book</th>
	</tr>
    </thead>
	<form action="" method="post">
	<tr>
	<td>
	<input type="text" name="rollno" required>
	</td>
	<td>
	<select name="slot" required>
	<option></option>
	<option value="slot1">slot1</option>
	<option value="slot2">slot2</option>
	</select>
	<input type="submit" value="confirm">
	</td>
	</form>
	<?php
		$slot="";
		$rollno="";
		$_SESSION["slot"]=$slot;
		$_SESSION["roll"]=$rollno;
		if(isset($_POST["slot"],$_POST["rollno"]))
		{
		$slot=$_POST["slot"];
		$_SESSION["slot"]=$slot;
		$rollno=$_POST["rollno"];
		$_SESSION["roll"]=$rollno;
		}
		$ob=mysqli_query($connect,"SELECT * FROM student WHERE Roll_No='$rollno'");
		$match=mysqli_fetch_array($ob);
		if($slot=="slot1")
		{
			echo "<td>".$match['Book1']."</td>";
			if($match['Book1']=="")
			{
				echo "<td></td>";
			}
			else
			{
			echo "<td>".$match['dateofreturnb1']."</td>";	
			}
		}
		else if($slot=="slot2")
		{
			echo "<td>".$match['Book2']."</td>";
			if($match['Book2']=="")
			{
				echo "<td></td>";
			}
			else
			{
			echo "<td>".$match['dateofreturnb2']."</td>";	
			}
		}
		?>
		</tr>
		</table>
		<br>
		<form action="bookreturn.php"><input type="submit" value="submit"></form>
		<h2>Change number Of Copies of books</h2>
<table class="zebra">
    <thead>
    <tr>
        <th>Select Book</th>        
        <th>current no. of copies</th>
        <th>enter new no. of copies</th>
		<th>click to submit</th>
    </tr>
    </thead>     
	<tr>
	<td>
	<form action="" method="post">
	<select name="slctbk">
	<option></option>
	<?php
	$op=mysqli_query($connect,"SELECT name FROM bookdb");
	while($bla=mysqli_fetch_assoc($op))
	{
	$blabla=$bla["name"];
	echo "<option value='$blabla'>$blabla</option>";
	}
	?>
	</select>
	<input type="submit" value="select">
	</form>
	</td>
	<td>
		<?php
		if(isset($_POST['slctbk']))
		{
			$bknm=$_POST['slctbk'];
			$_SESSION["bknm"]=$bknm;
			$qry=mysqli_query($connect,"SELECT copy FROM bookdb WHERE name='$bknm'");
			$no=mysqli_fetch_array($qry);
			echo $no['copy'];
		}
		?>
	</td>
	<form action="updtbook.php" method="post">
	<td><input type="text" name="newcopy" required autocomplete="off"></td>
	<td><input type="submit" value="update"></td>
	</form>
	</tr>	
</table>
<br>
<h2>enter new book</h2>
<table class="bordered">
<thead>
<tr>
	<td>enter book name</td>
	<td>enter the no. of copies</td>
	<td>click to add</td>
</tr>
</thead>
<tr>
	<form action="addbook.php" method="post">
		<td><input type="text" size="20" name="name" required autocomplete="off"></td>
		<td><input type="text" name="copy" required autocomplete="off"></td>
		<td><input type="submit" value="add"></td>
	</form>
</tr>
</table>
</body>
</html>
