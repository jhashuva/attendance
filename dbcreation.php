<form method="post" action="">
Server Name:<input type="text" name="servername"><br><br>
User Name:<input type="text" name="username"><br><br>
Password:<input type="text" name="password"><br><br>
DB Name:<input type="text" name="dbname"><br><br>
Table Name:<input type="text" name="tname"><br><br>
<input type="submit" value="submit">
</form>
<?php
$servername = "localhost";
$username = '';
$password = '';
$db_name='';
$table_name='';
if(isset($_POST['dbname'])&&isset($_POST['tname'])||isset($_POST['servername'])||isset($_POST['username'])||isset($_POST['password'])){
$db_name= $_POST['dbname'];
$table_name= $_POST['tname'];
$servername= $_POST['servername'];
$username= $_POST['username'];
$password= $_POST['password'];
}else{
$db_name='attendance';
$table_name='attendance';
$servername = 'localhost';
$username = '';
$password = '';
}
echo($db_name);
echo($table_name);
echo($servername);
echo($username);
echo $password;
$file = fopen("contacts.csv","r");
$a=array();
while(! feof($file))
  {
  $b=fgetcsv($file);
  array_push($a,$b);
  }
#print_r(fgetcsv($file));
#print_r($a);
fclose($file);
?>
