<?php
$server_name="localhost";
$username="root";
$password="" ;
$database_name="tayao_ims";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed" . mysqli_connect_error());}

if(isset($_POST['savedate']))
{
	$man_date= $_POST['man_date'];
	$exp_date= $_POST['exp_date'];
	$ship_date= $_POST['ship_date'];
	$prod_date= $_POST['prod_date'];
	
	
	
	
	
$sql_query = "INSERT INTO ims_date(man_date, exp_date, ship_date, prod_date) VALUES ('$man_date','$exp_date','$ship_date','$prod_date')";
	
	
	
	if (mysqli_query($conn, $sql_query))
{
echo "New Details Entry inserted successfully !";
}
else
{
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>