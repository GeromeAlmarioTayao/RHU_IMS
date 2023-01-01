   <!DOCTYPE html>
<html lang="en">
  <head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  header .navigation a:hover{
    background: #fff;
  }
  .content{
    max-width: 650px;
    margin: 60px 100px;
  }
  table{
    width: 90%;
    margin: 20px auto;
    font-family: Arial, Helvetica, sans-serif;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  }
   table, tr, th, td{
    border: 1px solid black;
    border-collapse: collapse;
    padding: 18px;
    background-color: white;
  }
   th, td{
    text-align: left;
    vertical-align: top;
  }

  </style>
  </head>
  <body>
   
   
   <?php
      function OpenCon()
    {
        $dbhost ="localhost";
        $dbuser ="root";
        $dbpass ="";
        $db = "tayao_ims";
     
$connection = new mysqli ($dbhost,$dbuser,$dbpass,$db) or die ("Connection Failed: %\n".$connection -> error);

return $connection;
}

function CloseCon($connection)
{
    $connection -> close();
}
      $connection = OpenCon();
  
          
          
          $sql_query = "SELECT * FROM ims_inventory";
          
          $result = mysqli_query($connection, $sql_query);
          if(mysqli_num_rows($result) > 0)
          {
          echo '<table> 
          <tr> 
          <th> Product ID</th>
          <th> Product Quantity </th> 
          <th> Product Type</th>
          <th> Action</th> 
          </tr>';
          
          while($row = mysqli_fetch_assoc($result)){
              
              echo '<tr > 	
                              <td>' . $row["prod_id"] . '</td>
                              <td>' . $row["prod_quan"] . '</td>
                              <td>' . $row["prod_type"] . '</td>
							  <td><a href= edit_inventoryq.php?id='.$row['prod_id'].' style="text-decoration:none">
                              <i class="fa fa-pencil-square-o" style="color:lightgreen"></a></i>
                              &nbsp;
                              <a href= delete_inventoryq.php?id='.$row['prod_id'].' style="text-decoration:none">
                              <i class="fa fa-trash" style="color:red"></i></a></i>
                              </td>

                    </tr>';
          }
          echo '</table>';
          }
          else
          {
              echo "0 results";
          }
      
          mysqli_close($connection);
    ?>
	  </body>
</html>