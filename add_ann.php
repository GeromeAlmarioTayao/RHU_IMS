<?php
$server_name="localhost";
$username="root";
$password="" ;
$database_name="tayao_ims";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed" . mysqli_connect_error());}

if(isset($_POST['save2']))
{
	$a_code= $_POST['a_code'];
	$a_type= $_POST['a_type'];
	$a_cont= $_POST['a_cont'];
	
	
	
$sql_query = "INSERT INTO ims_announce(a_code, a_type,a_cont) VALUES ('$a_code','$a_type','$a_cont')";
	
	
	
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