   <!DOCTYPE html>
<html lang="en">
  <head>
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
  
          
          
          $sql_query = "SELECT * FROM ims_staff";
          
          $result = mysqli_query($connection, $sql_query);
          if(mysqli_num_rows($result) > 0)
          {
          echo '<table> 
          <tr> 
          <th> Staff ID</th>
          <th> First Name</th> 
          <th> Middle Name</th>
          <th> Last Name</th> 
          <th> Contact Number</th> 
          <th> Birthday</th> 
          <th> Address</th> 
          <th> Gender</th> 
		  <th> Email</th> 
          </tr>';
          
          while($row = mysqli_fetch_assoc($result)){
              
              echo '<tr > 	
                              <td>' . $row["staff_id"] . '</td>
                              <td>' . $row["f_name"] . '</td>
                              <td>' . $row["m_name"] . '</td>
                              <td>' . $row["l_name"] . '</td>
                              <td> ' . $row["con_num"] . '</td>
                              <td>' . $row["b_day"] . '</td> 
                              <td>' . $row["adrrs"] . '</td> 
                              <td>' . $row["gend"] . '</td> 
                              <td>' . $row["email"] . '</td> 
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