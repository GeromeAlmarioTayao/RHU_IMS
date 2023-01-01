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
?>