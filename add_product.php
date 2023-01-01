<?php
$server_name="localhost";
$username="root";
$password="" ;
$database_name="tayao_ims";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed" . mysqli_connect_error());}

if(isset($_POST['save3']))
{
	$p_id= $_POST['p_id'];
	$p_name= $_POST['p_name'];
	$p_desc= $_POST['p_desc'];
	$man= $_POST['man'];
	$p_type= $_POST['p_type'];
	
	
	
	
$sql_query = "INSERT INTO ims_product(p_id, p_name, p_desc, man, p_type) VALUES ('$p_id','$p_name','$p_desc','$man','$p_type')";
	
	
	
	if (mysqli_query($conn, $sql_query))
{

        echo "<script>
        alert('New Products Inserted Successfully');
        window.location.href='Product.php';
        </script>";

}
else
{
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>