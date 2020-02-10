<html>
<head>
<title>MVC through Scripting</title>
<style>
body{
	height:300px;
	width:500px;
	margin-left:700px;
	margin-top:200px;
}
.mvc1{
border :2px solid black;
padding: 50px;
}
h1{
	text-align: center;
	color:blue;
}
h3{
	color:red;
}
table, th, td {
  border: 1px solid black;
</style>
</head>
<?php
$attendance=$_POST['attendence'];
echo $attendance;
$roll=$_POST['message'];
$rolls=explode(",", $roll);
echo $attendance."<br>";
$roll_no=array();
$field=null;
$connection = mysqli_connect("localhost","root","");
if($connection){
echo "Connected to mysql successfully"."<br>";
$db=mysqli_select_db($connection,"attendance");
if($db){
echo "Successfully selected mydb<br>";
foreach ($rolls as $x) {
	#echo $x."<br>";
	$sql = "SHOW COLUMNS FROM mvcts WHERE FIELD REGEXP '$x$'";
	#echo $sql."<br>";
	if($result=mysqli_query($connection,$sql)){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				
				array_push($roll_no, $row['Field']) ;
			}
		}
	}else{
		echo "unable to fetch the results";
	}
}
}else{
echo "Unable to select mydb";
}
}else{
echo "unable to connect";
}

echo "<h1>MVC Attendence</h1>";
echo "<form action='insertDetails.php' method='post'>";
echo "<div class='mvc1'>";
echo "<table>
	<tr>
    <th>Roll No.</th>
    <th>Attendence:</th>
  </tr>";


foreach ($roll_no as $roll) {
	echo "<tr><td><input type='text' name='rolls' value='$roll'></td>";
	if($attendance=='present'){
	echo "<td><select name='attendence' >
  <option value='present' selected>Present</option>
 <option value='absent'>Absent</option>
</select></td></tr>";
	}else{
		echo "<td><select name='attendence' >
  <option value='present'>Present</option>
 <option value='absent' selected>Absent</option>
</select></td></tr>";
	}

}

echo "</table><br><br><input type='submit'></h3></div></form>";
?>
#<?php $roll_no[0] ?>