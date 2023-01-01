<?php
require 'db_connect.php';
$connection = OpenCon();

if (isset($_POST['save'])){
       $id=$_POST['id'];

		   $p_id=$_POST['p_id'];
		   $p_name=$_POST['p_name'];
		   $p_desc=$_POST['p_desc'];
		   $man=$_POST['man'];
		   $p_type=$_POST['p_type'];
		   
		   $sql_query = "UPDATE ims_product SET p_id='$p_id', p_name='$p_name', p_desc='$p_desc', man='$man', p_type=' $p_type' WHERE p_id=$id;";
	  
                  if(mysqli_query($connection, $sql_query))
                      {
        echo "<script>
        alert('Product Edited successfully');
        window.location.href='display_product.php';
        </script>";
                      } 
                  else 
                      {
                            echo "Error" . $sql . "" .mysqli_error($connection);
                      }
                            mysqli_close($connection);
                }  
	   

?>

			<form action="edit_inventory.php" method="post">
            <fieldset>
                <legend>Update Product</legend>
                <table>
                    <tr>
                        <td>
                            <label for="p_id">Product ID: </label>
                        </td>
                        <td>
                            <input  type="number" name="p_id" id="p_id" placeholder="Product ID">
							</td>
							                        <td>
                            <label for="p_name">Product Name: </label>
                        </td>
                        <td>
                            <input  type="text" name="p_name" id="p_name" placeholder="Product Name">
							</td>
				</tr>
				                    <tr>
                        <td>
                            <label for="p_type">Product Type: </label>
                        </td>
                        <td>
                            <input  type="text" name="p_type" id="p_type" placeholder="Product Type">
							</td>
							                        <td>
                            <label for="man">Product Manufacturer: </label>
                        </td>
                        <td>
                            <input  type="text" name="man" id="man" placeholder="Manufacturer">
							</td>
				</tr>
				                    <tr>
                        <td>
                            <label for="p_desc">Product Description: </label>
                        </td>
                        <td>
                            <input  type="text" name="p_desc" id="p_desc" placeholder="Product Description">
				</tr>

						</table>
						<center>
                  <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                    <input type="submit" value="save" name="save">
						<center>
			</fieldset>
        </form>
