<?php
require 'db_connect.php';
$connection = OpenCon();

if (isset($_POST['save'])){
       $id=$_POST['id'];

		   $prod_id=$_POST['prod_id'];
		   $prod_quan=$_POST['prod_quan'];
		   $prod_type=$_POST['prod_type'];

		   
		   $sql_query = "UPDATE ims_inventory SET prod_id='$prod_id', prod_quan='$prod_quan', prod_type='$prod_type' WHERE prod_id=$id;";
	  
                  if(mysqli_query($connection, $sql_query))
                      {
        echo "<script>
        alert('Product Edited successfully');
        window.location.href='display_inventory.php';
        </script>";
                      } 
                  else 
                      {
                            echo "Error" . $sql . "" .mysqli_error($connection);
                      }
                            mysqli_close($connection);
                }  
	   

?>

			 <center>
        <br><br>
        <form action="edit_inventoryq.php" method="post">
            <fieldset>
                <legend>Update Inventory Items</legend>
                <table>
                    <tr>
                        <td>
                            <label for="prod_id">Product ID: </label>
                        </td>
                        <td>
                            <input type="text" name="prod_id" id="prod_id">
                    </tr>
                    <tr>
                        <td>
                            <label for="prod_quan">Product Quantity: </label>
                        </td>
                        <td>
                            <input type="number" name="prod_quan" id="prod_quan">
                    </tr>
					                    <tr>
                        <td>
                            <label for="prod_type">Product Type: </label>
                        </td>
                        <td>
                            <input type="text" name="prod_type" id="prod_type">
                    </tr>

                </table>
				<center>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                    <input type="submit" value="save" name="save">
				<center>
		   </fieldset>
        </form>
    </center>