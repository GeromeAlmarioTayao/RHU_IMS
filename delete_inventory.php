<?php
require 'db_connect.php';
$connection = OpenCon();

if (isset($_GET['id'])){
       $id=$_GET['id'];

    $sql_query = "DELETE FROM ims_product WHERE p_id='$id'";
    $result = mysqli_query($connection,$sql_query);

    if ($result)
    {
        echo "<script>
        alert('Product Deleted successfully');
        window.location.href='display_product.php';
        </script>";
        
    }
    else{
        die(mysqli_error($connection));

    }
}
else{
    echo "Wrong ID";
    mysqli_close($conn);
}

?>