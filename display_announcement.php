   <!DOCTYPE html>
<html lang="en">
  <head>
  <style>
         p {
            text-align: justify;
            color:black;
            font-size:1.5em;
        }

        fieldset {
            background-color: #EBF1F5;
            width: 60%;
            border-color: #046ec4;
            border-width: thick;
            border-radius: 8px;
            box-shadow: 0 0 10px #666;
            padding-top: 10px;
            text-align: center;
        }

        legend {
            background-color: #043e7d;
            text-align: left;
            color: white;
            font-weight:500;
            padding: 5px 10px;
            font-size: 1.5em;
            border-radius: 8px;
        }

        td {
            padding-right: 20px;
            padding-left: 20px;
        }

        .menu {
            background-color: white;
        }

        img {

        }

        h1 {
            color: black;
            font-size: 2.5em;
            margin: 0px;
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
  
          
          
          $sql_query = "SELECT * FROM ims_announce";
          
          $result = mysqli_query($connection, $sql_query);
          if(mysqli_num_rows($result) > 0)
          {

          
          while($row = mysqli_fetch_assoc($result)){
              
              echo '
			   <center><br><fieldset>
                <legend>'. $row["a_type"] .'</legend>
                '. $row["a_cont"] .'
            </fieldset><br></center>
			  ';
          }
          echo '</table>';
          }
          else
          {
              echo "No annuncements yet";
          }
      
          mysqli_close($connection);
    ?>
	  </body>
</html>