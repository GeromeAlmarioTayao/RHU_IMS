<?php
$server_name="localhost";
$username="root";
$password="" ;
$database_name="tayao_ims";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed" . mysqli_connect_error());}

if(isset($_POST['save2_inv']))
{
	$prod_id= $_POST['prod_id'];
	$prod_quan= $_POST['prod_quan'];
	$prod_type= $_POST['prod_type'];
	
	
	
	
$sql_query = "INSERT INTO ims_inventory(prod_id, prod_quan, prod_type ) VALUES ('$prod_id','$prod_quan','$prod_type')";
	
	
	
	if (mysqli_query($conn, $sql_query))
{
        echo "<script>
        alert('new inventory successfully');
        window.location.href='inventory.php';
        </script>";
}
else
{
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>