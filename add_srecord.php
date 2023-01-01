<?php
$server_name="localhost";
$username="root";
$password="" ;
$database_name="tayao_ims";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed" . mysqli_connect_error());}

if(isset($_POST['save']))
{
	$fname= $_POST['fname'];
	$mname= $_POST['mname'];
	$lname= $_POST['lname'];
	$bday= $_POST['bday'];
	$gend= $_POST['gend'];
	$sid= $_POST['sid'];
	$cont= $_POST['cont'];
	$add= $_POST['add'];
	$email= $_POST['email'];
	$pword= $_POST['pword'];
	$cpword= $_POST['cpword'];
	
$sql_query = "INSERT INTO ims_staff(staff_id, f_name, m_name, l_name, con_num, b_day, gend, adrrs, email, pass, cpass) 
VALUES ('$sid','$fname','$mname','$lname','$cont','$bday','$gend','$add','$email','$pword','$cpword')";
	
if (mysqli_query($conn, $sql_query))
{
echo '<script>alert("Added Succesfully")</script>';
}
else
{
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}