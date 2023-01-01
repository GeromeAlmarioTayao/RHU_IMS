<?php
$server_name="localhost";
$username="root";
$password="" ;
$database_name="tayao_ims";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed" . mysqli_connect_error());}
	
if(!empty($_POST['save']))
{
   $staff_id=$_POST['staff_id'];
   $pass=$_POST['pass'];
   $query="SELECT * FROM ims_staff where staff_id='$staff_id' and pass='$pass'";
   $result=mysqli_query($conn,$query);
   $count=mysqli_num_rows($result);
   if($count>0)
   {
       header("Location: Dashboard.php");
   }
   else
   {
       
       echo '<script>alert("sign in unsuccessful");  </script>';
       echo  '<a href="Login.php">Click here to Sign-in again</a>';
   }
}

?>